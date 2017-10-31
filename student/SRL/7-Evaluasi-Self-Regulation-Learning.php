<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>7. Evaluation Self Regulation Learning</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="l6sk4l-off-canvas" data-position="left" aria-hidden="true">
                <div class="profile">
                    <img class="thumbnail circle" src="../../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
                    <li><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li class="active"><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>SRL</a></li>
                    <li><a href="#"><i class="fa fa-unlock"></i> Logout</a></li>
                </ul>
            </div>
            <div class="main off-canvas-content" data-off-canvas-content="">
                <div class="title-bar hide-for-large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="my-info" aria-expanded="false" aria-controls="my-info"></button>
                        <span class="title-bar-title">Sarah Ng</span>
                    </div>
                </div>
                <div class="row main-wrapper rounded">
                    <div class="row top space">
                        <div class="columns">
                            <div class="top-bar">
                                <ol class="timeline">
                                    <li class="timeline">
                                        MAI Tes
                                        <span class="details"> Description of point 1 </span>
                                    </li>
                                    <li class="timeline done">
                                        Set Goals
                                        <span class="details">Description of point 2</span>
                                    </li>
                                    <li class="timeline done">
                                        Prior Knowledge Activation
                                        <span class="details">Description of point 3</span>
                                    </li>
                                    <li class="timeline done">
                                        Learning Strategy Option
                                        <span class="details">Description of point 4</span>
                                    </li>
                                    <li class="timeline done">
                                        Adaptive-Learning Materials
                                        <span class="details">Description of point 5</span>
                                    </li>
                                    <li class="timeline done">
                                        Learning Evaluation
                                        <span class="details">Description of point 6</span>
                                    </li>
                                    <li class="timeline done">
                                        Self-Regulation Learning Evaluation
                                        <span class="details">Description of point 7</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2 style="display: block;" align="center">Self-Regulation Learning Evaluation</h2>
                            <hr width="75%" />
                            <table class="projects table">
                                <thead>
                                    <tr>
                                        <th width="5%">Nomor</th>
                                        <th width="85%">Pertanyaan</th>
                                        <th width="10%">Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>1</code></td>
                                        <td>
                                            Saya pernah mendengar materi ... sebelumnya, dan saya sudah sedikit memahaminya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="1" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="1">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>2</code></td>
                                        <td>
                                            Saya memahami materi ... dengan baik.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="2" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="2">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>3</code></td>
                                        <td>
                                            Materi ... memang yang saya perlukan untuk mencapai tujuan belajar saya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="3" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="3">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>4</code></td>
                                        <td>
                                            Menggunakan strategi ... dalam mempelajari ... sangat membantu saya untuk memahaminya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="4" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="4">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>5</code></td>
                                        <td>
                                            Waktu yang disediakan dalam <i> Hypermedia Learning Environment </i> ini cukup bagi saya
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="5" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="5">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>6</code></td>
                                        <td>
                                            Belajar dengan menggunakan <i> Hypermedia </i> ini lebih mudah dibanding membaca buku.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="6" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="6">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="button success" data-open="exampleModal1">See Results</a>
                            <div class="reveal" id="exampleModal1" data-reveal>
                                <h2 align="center">Results And Recomendations</h2>
                                <p class="lead">Skor Evaluasi Materi: ...</p>
                                <p class="lead">Hasil Monitoring SRL:</p>
                                <ul>
                                    <li>Pengetahuan: ....</li> 
                                    <li>Pemahaman: ....</li> 
                                    <li>Kemajuan dalam mencapai tujuan: ....</li> 
                                    <li>Penggunaan strategi: ....</li> 
                                    <li>Penggunaan Waktu: ....</li> 
                                    <li>Tingkat Kesulitan: ....</li> 
                                </ul>
                                <p> Hasil Belajar Anda dalam Materi ... menggunakan Strategi ... adalah ... , Sehingga anda direkomendasikan untuk ....  </p>
                                <button class="close-b  utton" data-close aria-label="Close reveal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/foundation.js"></script>
    <script>
    $(document).foundation();
    </script>
</body>

</html>
