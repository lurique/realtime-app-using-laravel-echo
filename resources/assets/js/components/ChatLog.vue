<template lang="html">
	<div class="chat-log">
		<chat-message v-for="message in messages" v-bind:key="message" v-bind:message="message"></chat-message>
	</div>
</template>

<script>
	export default {
		props: ['messages']
	}
</script>

<style lang="css">

</style>
