<!DOCTYPE html>
<html>
<head>
  <title>Gwyneth's Gift VMS | FoodBank Search</title>
  <style>
    th.view, td.view, th.website, th.email, td.website, td.email {
      text-align: center;
    }

    a.button {
      display: inline-block;
      padding: 0.5rem 1rem;
      text-align: center;
      text-decoration: none;
      background-color: #007bff;
      color: #fff;
      border-radius: 0.25rem;
    }

    a.website {
      color: blue;
    }

    a.email {
      color: green;
    }
  </style>
</head>
<body>
  <h1>Search for Foodbanks in Area</h1>
  <form id="person-search" class="general" method="get">
    <h2>Find Foodbank</h2>
    <label for="name">Foodbank Name</label>
    <input type="text" id="name" name="name" placeholder="Enter the foodbank name">

    <label for="zipCode">Zip Code</label>
    <input type="text" id="zipCode" name="zipCode" placeholder="Enter the zip code">

    <label for="city">City</label>
    <input type="text" id="city" name="city" placeholder="Enter the city">

    <label for="county">County</label>
    <input type="text" id="county" name="county" placeholder="Enter the county">

    <input type="submit" value="Search">
    <a class="button cancel" href="index.php">Return to Dashboard</a>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Zip Code</th>
          <th>County</th>
          <th>City</th>
          <th class="website">Website</th>
          <th class="email">Email</th>
          <th class="view">View</th>
        </tr>
      </thead>
      <tbody>
        </tbody>
    </table>
  </form>
</body>
</html>
