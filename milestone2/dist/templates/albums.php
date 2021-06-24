<div class="albums">
    <div class="album" v-for="album in albums" v-if="genreSelected == album.genre || genreSelected == 'All'">
        <img :src="album.poster" alt="">
        <div class="details">
            <h2>{{album.title}}</h2>
            <div>{{album.author}} <br> {{album.year}}</div>
        </div>
    </div>
</div>