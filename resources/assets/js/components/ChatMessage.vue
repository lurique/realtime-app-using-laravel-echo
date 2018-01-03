<template lang="html">
	<div class="message">
		<p>{{ message.message }}</p>
		<small>{{ message.username }}</small>
	</div>
</template>

<script>
	export default {
		props: ['message']
	}
</script>

<style lang="css">

</style>
