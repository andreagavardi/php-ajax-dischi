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
                //console.log(resp);
                this.albums = resp.data;
                this.albums.forEach(album => {
                    if (this.albumGenre.includes(album.genre)) {

                    } else {
                        this.albumGenre.push(album.genre)
                    }
                });
                console.log(this.albumGenre);



            })
            .catch(error => {
                console.error(e);
            });

    }
})