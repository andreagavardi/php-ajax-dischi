const app = new Vue({
    el: '#app',
    data: {
        url: "../dist/api/api-dischi.php",
        albums: "",
        albumsOrdered: [],
        albumGenre: [],
        genreSelected: "All"
    },
    methods: {


    },
    mounted() {

        axios.get(this.url)
            .then(resp => {
                console.log(resp);
                this.albums = resp.data



            })
            .catch(error => {
                console.error(e);
            });

    }
})