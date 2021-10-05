<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Database Activity</title>


    <style media="screen">
      p {
        margin: 0;
        font-size: .7rem;
      }
      .cont-post {
        background-color: yellow;
        width: 250px;
        height: 325px;
        display: grid;
        grid-template-columns: 5% 20% 1fr 25% 5%;
        grid-template-rows: 250px 5% 1fr 1fr 5%;
        grid-template-areas:
        " img img img img img "
        " . . . . ."
        " . imgProfile username likes . "
        " . imgProfile postTime likes . "
      }
      .img-post {
        grid-area: img;
        background-color: gray;
      }
      .img-profile {
        grid-area: imgProfile;
      }
      .username,
      .post-time {
        margin: 5% 0 0 10%;
      }
      .username {
        grid-area: username;
      }
      .post-time {
        grid-area: postTime;
      }
      .likes {
        grid-area: likes;
        margin-top: 25%;
      }
    </style>

	</head>
	<body>
    <h1>Instagram</h1>
    <?php include "db_connect.php"; ?>

  <div class="cont-post">
    <div class="img-post"></div>
    <img class="img-profile" src="https://via.placeholder.com/50" alt="Profile">
    <p class="username">username.here</p>
    <p class="post-time">00 hours ago</p>
    <p class="likes">00 Likes</p>
  </div>

	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
