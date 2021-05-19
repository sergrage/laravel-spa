<template>
	<div class="">
		<h1 class="font-normal text-3xl text-dark leading-none">Statistics</h1>

		<ul>
			<li><b>Всего серий:</b> {{ series }}</li>
			<li><b>Всего уроков:</b> {{ lessons }}</li>

			<img :src="img" alt="">
		</ul>	
	</div>
	



</template>

<script>
export default {

	data() {
		return {
			series: 0,
			lessons: 0,
			img: ''
		}
	},

	created() {
		axios.get('api/stats').then(({data}) => {
			console.log(data);
			this.series = data.series
			this.lessons = data.lessons
			this.img = data.img
		});
	}

		
}

</script>

<style>
	


</style>