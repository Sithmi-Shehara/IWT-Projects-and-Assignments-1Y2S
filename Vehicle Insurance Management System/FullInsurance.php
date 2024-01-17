<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Full Coverage</title>

  <style>
    body {
      font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
      font-size: medium;
    }

    .table1,
    .table2,
    .table3,
    .table4 {
      margin-left: auto;
      margin-right: auto;
    }

    .para1 {
      margin-left: 50px;
      margin-right: 50px;
    }

    .para2 {
      background-color: rgb(223, 255, 255);
      margin-top: 50px;
      margin-bottom: 100px;
      margin-left: 50px;
      margin-right: 50px;
    }

    h2,
    h3,
    h1 {
      text-align: center;
    }

    .para3 {
      margin-top: 100px;
      margin-bottom: 100px;
      margin-left: 50px;
      margin-right: 50px;
    }

    .para4 {
      margin-bottom: 75px;
      margin-left: 50px;
      margin-right: 50px;
      background-color: rgb(223, 255, 255);
    }

   
    .sidebar {
     
      justify-content: space-between;
      background-color: #666666;
      min-width: 200px;
    }

    .sidebar>div {
      flex: 1 0 100%;
      margin-right: 10px;
    }

    .NavItemsHover {
      display: flex;
      justify-content: center;
      padding: 10px;
      cursor: pointer;
      color: white;
    }

    .NavItemsHover:hover {
      color: gray;
    }
  </style>
</head>

<body>
  <?php

  include_once "hedder.php"
  ?>


  <div class="container">

    <div class="sidebar">
      <div>
        <img src="images\customer_user_userphoto_account_person_icon.png" style="width: 20px; height: auto;">
        <label for="" style="font-size: 20px; margin: 15px;">Asiri Chathurika</label>
        <hr>
      </div>


      <div class="NavItemsHover" onclick="window.location='myprofile.php'">
        <label>My Profile</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='InsuranceTypes.php'">
        <label>Insurance Types</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='ClaimRequest.php'">
        <label>Claim Request</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='claim_status_page.php'">
        <label>Claim Status</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='payments.php'">
        <label>Payments</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='contact.php'">
        <label>Contact Us</label>
      </div>

      <div class="NavItemsHover">
        <label>About Us</label>
      </div>

      <div class="NavItemsHover">
        <label>Customer Feedback</label>
      </div>

      <div class="NavItemsHover" onclick="logout();">
        <label>Log Out</label>
      </div>
    </div>

   

    <div class="content">
      <h1>Benefits of Full Coverage</h1>
      <div class="para1">
      
        <table class="table1">
          <tr>
            <td>
              <img src="images/motor.jpg" width="300px" height="300px" />
            </td>

            <td>
            
              SAFE Travels, whose comprehensive motor insurance coverage is trusted by more than 50 million drivers worldwide to protect their expensive set of wheels, provides coverage that is both ideal for your car and your changing lifestyle.



              <ul>
                <li>
                 
                  Flexible, customized plans for quick claim resolutions supported by world-class service and round-the-clock assistance

                </li>

                <li>
                 
                  An Auto Center for Safe Travel Insurance outfitted with the most recent

                  powered by skilled personnel for motor repair

                  unique structural and collision repairs for your car
                </li>

                <li>
            
                For your convenience, there is an island-wide network of registered garages offering cashless repair services.
                </li>
              </ul>
            </td>
          </tr>
        </table>
      </div>

      <div class="para2">
        <h2 class="heading">
          The Safe Travel's Advantages for Full Cover Members
        </h2>

        
        <table class="table2">
          <tr>
            <th>Comprehensive cover for you and your vehicle</th>

            <th>Safe Travel's Auto Center for best solutions and fast repairs</th>

            <th>Extensive Garage Network for emergencies</th>
          </tr>

          <tr>
            <td>
            Complete insurance against unintentional loss or damage to your car, its accessories, and spare parts, plus automatic flood and natural disaster coverage
            </td>

            <td>
            Our Colombo-based workshop, which is outfitted with the newest technology and the best expertise, provides outstanding automobile repair services.
            </td>
            <td>
            A expanding network of registered garages in Sri Lanka, as well as a partner garage network, are available to assist you with breakdowns or repairs wherever you are traveling.
            </td>
          </tr>
        </table>
      </div>

      <div>
        <h3 class="heading3">Why you select Safe Travels's Full Coverage?</h3>
      </div>

      <div>
        <h2 class="heading">
          We deliver on globally benchmarked insurance solutions with localized
          knowledge and expertise
        </h2>
      </div>

      <div class="para3">
        <table class="table3">
          <tr>
            <th>
              <img src="images/superiorcustomerservice.png" alt="customer_service" length="50px" width="50px" />
            </th>
            <th>
              <img src="images/rapiddamageresponse.png" alt="rapid_damege" length="50px" width="50px" />
            </th>
            <th>
              <img src="images/industrystandards.png" alt="industrystandards" length="50px" width="50px" />
            </th>
          </tr>
          <tr>
            <th>Tier-1 Industry Standards</th>

            <th>Rapid Damage Response</th>

            <th>Superior Customer Service</th>
          </tr>
          <tr>
            <td>
            Founded on a 130-year auto insurance heritage that covers more than 40 car brands in more than 30 nations
            </td>
            <td>
            A company-owned collision repair facility that can restore your damaged vehicle to like-new condition
            </td>
            <td>
            Assessors and Agents with training in accordance with international standards provide knowledgeable help for all claim notifications
            </td>
          </tr>
        </table>
      </div>

      <div style="display: flex; justify-content: start; margin-left: 50px;">
        <h2>When we promise total protection, we mean it.</h2>
      </div>

      <div class="para4">
        <table class="table4">
          <tr>
            <td>
              <b>Safe Travel's Auto Center:<br />
                For Exclusive Repairs and Solutions
              </b>
              <br />
              <br />
            </td>
          </tr>

          <tr>
            <td>
            The Safe Travel's Auto Center, which is situated in the center of Colombo, is a state-of-the-art facility outfitted with the most recent vehicle repair technologies and solutions for the best collision and structural repairs for your vehicle. Our Auto Center's highly qualified personnel provide the following services:
            </td>
          </tr>
          <tr>
            <td>
              <ul>
                <li>Cashless repair</li>
                <li>
                  High quality spare parts produced according to manufacturer’s
                  specifications
                </li>
                <li>Computerized diagnostic tools</li>
                <li>Spray paint booth with advanced technology</li>
              </ul>
            </td>

            <td>
              <img src="images/fullclaim2.png" alt="fullclaim2" length="300px" width="300px" />
            </td>
          </tr>
        </table>
      </div>
    </div>


  </div>


  <?php

  include_once "footer.php";

  ?>
</body>

</html>