<template lang="html">
	<div class="chat-composer">
		<input type="text" placeholder="Type your message here..." v-model="messageString" @keyup.enter="sendMessageString">
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
