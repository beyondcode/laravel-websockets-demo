<template>

    <div class="input-group mb-3">
      <input
          id="btn-input"
          type="text"
          name="message"
          class="form-control"
          placeholder="Type your message here..."
          v-model="newMessage"
          @keyup.enter="sendMessage"
          @keyup="sendTypingEvent">

      <button class="btn btn-primary text-white" type="button" id="btn-chat" @click="sendMessage">Send</button>

    </div>

</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendTypingEvent() {
                Echo.join('chat')
                    .whisper('typing', this.user);
            },

            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>
