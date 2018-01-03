<template lang="html">
	<div class="chat-composer">
		<input id="message-field" type="text" placeholder="Type your message here..." v-model="messageString" @keyup.enter="sendMessageString">
		<button class="btn btn-primary" @click="sendMessageString">Submit</button>
	</div>
</template>

<script>
	export default {
		data () {
			return {
				messageString: ''
			}
		},

		methods: {
			sendMessageString() {
				var messageField = document.getElementById('message-field');

				if ( messageField.value == '' ) {
					alert('Please, type something in message input');

					return;
				}

				this.$emit('messagesubmitted', {
					message: this.messageString,
					username: "Lucas"
				});

				this.messageString = "";
			}
		}
	}
</script>

<style lang="css">
	.chat-composer {
		display: flex;
	}

	.chat-composer input {
		flex: 1 auto;
	}
</style>
