<template>
    <div class="container">
            
    </div>
</template>

<script>
    export default {
        props: ['room', 'user'],
    	data() {
    		return {
    			messages: [],
    			textMessage: '',
                isActive: false,
                typingTimer: false,
                activeUsers: []
    		}
    	},
        computed: {
            channel() {
                return window.Echo.join('room.' + this.room.id);
            }
        },
        mounted() {
        	this.channel
                .here((users) => {
                    this.activeUsers = users;
                })
                .joining((user) => {
                    this.activeUsers.push(user);
                })
                .leaving((user) => {
                    this.activeUsers.splice(this.activeUsers.indexOf(user), 1);
                })
        		.listen('PrivateChat', ({data}) => {
        			this.messages.push(data.body);
                    this.isActive = false;
        		})
                .listenForWhisper('typing', (e) => {
                    this.isActive = e;
                    if(this.typingTimer) clearTimeout(this.typingTimer);
                    this.typingTimer = setTimeout(() => {
                        this.isActive = false;
                    }, 2000);
                });
        },
        methods: {
        	sendMessage() {
        		axios.post('/messages', { body: this.textMessage, room_id: this.room.id });
        		this.messages.push(this.textMessage);
        		this.textMessage = '';
        	},
            actionUser() {
                this.channel
                    .whisper('typing', {
                        name: this.user.name
                    });
            }
        }
    }
</script>