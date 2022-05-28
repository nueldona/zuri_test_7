<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <style>
    input[type=text],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    form {
      border-radius: 5px;
      width: 100%;
      background-color: #f2f2f2;
      padding: 3rem 4rem;
    }

    section {
      width: 30%;
      position: absolute;
      top: 10%;
      left: 45%;
      transform: translate(-45%, 10%);
    }

    main {
      position: relative;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <main>
    <section>
      <form method="POST" action="user_data.php">
        <label for="Name">Name:</label>
        <input type="text" name="name" id="name"></input>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"></input>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="text" name="date_of_birth" id="date_of_birth"></input>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" id="gender"></input>

        <label for="country">Country</label>
        <input type="text" name="country" id="country"></input>

        <input type="submit" value="Submit">
      </form>
    </section>
  </main>
</body>

</html>