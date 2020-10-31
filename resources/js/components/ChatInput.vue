<template>
    <div class="input-group">
        <input id="btn-input" name="message" type="text" class="form-control input-sm" placeholder="Type your message here..."
               v-model="newMessages"
               @keyup.enter="sendMessage"
        />
        <span class="input-group-btn">
            <button class="btn btn-primary" id="btn-chat"
            @click="sendMessage"
            >Send</button>
        </span>
    </div>
</template>
<script>
export default {
    props:['user'],
    // Data
    data(){
        return {
            newMessages: ''
        }
    },

    methods: {
        // Whisper

        // Send Message
        sendMessage(){
            this.$emit('message-sent', {
                user: this.user,
                message: this.newMessages,
            })
            this.newMessages = '';
        }
    }

}
</script>
