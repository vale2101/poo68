<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-purple-900/80">
    <main class="bg-purple-400/60 h-[640px] w-[380px] rounded">
        <header class="flex justify-center items-center py-5 bg-white/60 rounded-t-md">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-pink-500 hover:-translate-x-4 transition-all" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
            </a>
            <h1 class="text-2xl">Construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php 
                class PlayList {
                    //Atributos 
                    private $name;
                    private $artist = Array();
                    private $album = Array();
                    private $cover = Array();
                    private $year = Array();

                    //Metodos
                    public function __construct($name) {
                        $this ->name   = $name;
                    }
                    public function setPlayList($artist, $album, $cover, $year) {
                        $this ->artist[] = $artist;
                        $this ->album[] = $album;
                        $this ->cover[]  = $cover;
                        $this ->year[]   = $year;
                    }
                    public function getPlayList() {
                         echo "<div class='p-2 ring-1 ring-white/80 rounded-md'>
                                    <h2 class='text-center text-2xl my-4'> $this->name </h2>";
                                    for($i = 0; $i < count ($this->artist); $i++) {
                                 echo "<div class='p-2 mb-4 flex flex-col gap-4 bg-white/30 rounded-md'>
                                    <p> <strong>Artista: </strong>".$this->album[$i]."</p>
                                    <img class='rounded-md' src='".$this->cover[$i]."'alt='Cover' widt='280px'>
                                    <p> <strong>Album: </strong>".$this->artist[$i]."</p>
                                    <p> <strong>Año: </strong>".$this->year[$i]."</p>
                                    </div>";
                                    }
                               "</div>";
                    }
                }
                $myPlayList = new PlayList ('Favorite Music');

                $myPlayList-> setPlayList ( 'A donde vamos', 'Morat', 'https://tinyurl.com/38h785ww', 2021);
                $myPlayList-> setPlayList ( 'Lo mejor que hay en mi vida', 'Andres Cepeda', 'https://tinyurl.com/4epw84u6', 2012);
                $myPlayList-> setPlayList ( 'A mi manera', 'Felipe Pelaez', 'https://tinyurl.com/ykpv6xy3', 2008);
                $myPlayList-> setPlayList ( 'Ecos de amor', ' Jesse y joy', 'https://tinyurl.com/m3mujwdd', 2015);
                $myPlayList-> setPlayList ( 'Llorar es una locura', 'Fanny Lu', 'https://tinyurl.com/2s4hbhj5', 2016);
                $myPlayList-> getPlayList ();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.js"></script>
</body>
</html>