<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>

    <title>zuingo88 - php-ajax-dischi</title>

    <!-- my style -->
    <link rel="stylesheet" href="css/main.css" />

    <!-- my js -->
    <script src="js/script.js"></script>
</head>

<body>
    <div id="app" class="screen">
        <div class="container flex">
            <!-- navbar -->
            <nav class="flex_col">
                <div class="title flex_center">
                    <img height="80px" width="80px" src="img/logo.png" alt="" />
                    <h1>disc</h1>
                </div>
                <div class="settings">
                    <!-- filtri -->
                    <div class="filter">
                        <select v-model="filter">
                            <option value="">Search for...</option>
                            <option v-for="filter in filters" :value="filter">
                                {{filter}}
                            </option>
                        </select>
                        <select v-if="filter == 'Genre' || filter == 'Both'" v-model="genSel">
                            <option value="">Filter for genre</option>
                            <option v-for="genre in genres" :value="genre">
                                {{genre}}
                            </option>
                        </select>
                        <select v-if="filter == 'Author' || filter == 'Both'" v-model="autSel">
                            <option value="">Filter for author</option>
                            <option v-for="author in authors" :value="author">
                                {{author}}
                            </option>
                        </select>
                    </div>

                    <!-- ordina -->
                    <div class="sort">
                        <span class="icon" @click="sortIncr"><i class="fas fa-sort-numeric-down"></i></span>
                        <span>Increasing year</span>
                    </div>
                    <div class="sort">
                        <span class="icon" @click="sortDecr"><i class="fas fa-sort-numeric-down-alt"></i></span>
                        <span>Descending year</span>
                    </div>
                </div>
            </nav>
            <!-- fine navbar -->

            <!-- card_container -->
            <div class="card_container flex_wrap just_start">
                <div class="card" v-for="album in albums" v-if="(genSel == album.genre || genSel == '') && (autSel == album.author || autSel == '')">
                    <img width="250px" height="250px" :src="album.poster" alt="" />
                    <h2>{{album.title}}</h2>
                    <h3>{{album.author}}</h3>
                    <p>#{{album.genre}}</p>
                    <p>Year: {{album.year}}</p>
                </div>
            </div>
        </div>
        <!-- fine container -->
    </div>
    <!-- fine screen -->
</body>

</html>