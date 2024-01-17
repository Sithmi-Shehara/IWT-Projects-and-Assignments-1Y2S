<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Third Party Insurance</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .ins_accordian {
      background-color: rgb(223, 255, 255);
    }

    #accordian {
      padding-top: 50px;
      padding-bottom: 50px;
      margin: 100px auto;
      width: 1000px;
    }

    #accordian li {
      list-style: none;
      width: 100%;
      margin-bottom: 10px;
      background: #ffffff;
      padding: 10px;
      border-radius: 4px;
    }


    #accordian li:hover {
      background-color: lightblue;
    }

    #accordian li label {
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-weight: 500;
      font-size: 18px;
      cursor: pointer;
      color: rgb(11, 14, 53);
    }

    #accordian li label span {
      transform: rotate(90deg);
      font-size: 22px;
      color: #333;
    }

    #accordian label+input[type="radio"] {
      display: none;
    }

    #accordian .content {
      padding: 0 10px;
      line-height: 26px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s;
    }

    #accordian label+input[type="radio"]:checked+.content {
      max-height: 400px;
    }

    .head1 h1 {
      text-align: center;
      padding-top: 20px;
    }

   
    .sidebar {
      
      justify-content: space-between;
      background-color: #666666;
    }

    .sidebar>div {
      flex: 1 0 100%;
      margin-right: 10px;
    }

    .NavItemsHover {
      display: flex;
      align-items: center;
      padding: 10px;
      cursor: pointer;
      color: black;
    }

    .NavItemsHover:hover {
      color: white;
    }
  </style>
</head>

<body>

  <?php
  include_once "hedder.php";
  ?>

  <div class="container" >
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

    <div class="NavItemsHover" onclick="window.location='payment_details.php'">
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



    <div class="contents1" >

      <div class="insidecontainer" style="width:1300px;">
        <label for="h1" class="head1">
          <h1>Benefits Of Our Third Party Coverage</h1>
        </label>


        <div>
          <table>
        </div>


        <div class="ins_accordian" >
          <ul id="accordian" >
            <li>
              <label for="first">
                Flood & Natural Perils Cover<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="first" checked />
              <div class="content">
                <p>Applicable for all vehicle categories.</p>
              </div>
            </li>
            <li>
              <label for="second">
                Leasing & Hire Purchase Assignment<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="second" />
              <div class="content">
                <p>Applicable for all vehicle categories.</p>
              </div>
            </li>
            <li>
              <label for="third"> Air Bag Cover<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="third" />
              <div class="content">
                <p>Applicable for passenger cars and dual-purpose vehicles.</p>
              </div>
            </li>
            <li>
              <label for="fourth">
                Baby on Board Protection<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="fourth" />
              <div class="content">
                <p>
                Medical expense reimbursements of up to LKR 100,000/= are permitted per kid, with a maximum of two children being covered by a single event. The child's age should not be more than 15 years old. Exclusively applicable to collisions involving insured passenger automobiles and multipurpose vehicles. Excludes rented automobiles.
                </p>
              </div>
            </li>
            <li>
              <label for="fifth">
                Reimbursement of Overnight Stay<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="fifth" />
              <div class="content">
                <p>
                If an accident renders the insured vehicle immobile, overnight lodging costs up to LKR 5,000/= are covered. Depending on the severity of the damage, subject to assessor review and suggestion. applicable only to the categories of motor lorry and dual-purpose vehicles. Excludes rented automobiles.
                </p>
              </div>
            </li>
            <li>
              <label for="sixth">
                Towing Charge Reimbursement<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="sixth" />
              <div class="content">
                <p>
                If the insured vehicle becomes immobile as a result of an accident, towing costs up to LKR 10,000/= will be reimbursed.
                only relevant to the passenger car, dual-purpose vehicle, and motor truck categories. Excludes rented automobiles.
                </p>
              </div>
            </li>
            <li>
              <label for="seventh">
                Leasing Rental Reimbursement<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="seventh" />
              <div class="content">
                <p>
                In the event of an accident, up to LKR 100,000/= in lease rental reimbursements may be made for a maximum of two months while the insured vehicle is being repaired.
                Repairs that take more than 20 days to complete are eligible for payment depending on the number of days that have passed since the repairs were completed, subject to assessor evaluation and recommendation based on damage. applicable only to the motor lorry and dual purpose categories. Excludes rented automobiles.
                </p>
              </div>
            </li>
            <li>
              <label for="eighth">
                Emergency Medical Expenses Reimbursement<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="eighth" />
              <div class="content">
                <p>
                In the event of a collision involving the covered vehicle, up to LKR 25,000/= in reimbursements for emergency medical expenditures per person with a maximum of LKR 2,500/= per day may be provided, with the option of covering up to five occupants, including the insured.
                Presenting the hospital diagnosis card is required when filing the claim. only relevant to the passenger car, dual-purpose vehicle, and motor truck categories. excluded are rented automobiles
                </p>
              </div>
            </li>
            <li>
              <label for="ninth">
                Special Windscreen Cover<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="ninth" />
              <div class="content">
                <p>
                Regardless of the cause of damage, the insured vehicle's windscreen or windows may be replaced for up to LKR 100,000/= without causing any harm to the rest of the bodywork.
                only relevant to the passenger car, dual-purpose vehicle, and motor truck categories. excluded are rented automobiles
                </p>
              </div>
            </li>
            <li>
              <label for="tenth"> Taxi Fee Reimbursement<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="tenth" />
              <div class="content">
                <p>
                Alternative transport fee of LKR 1,000/= per day up to a period of 15 days can be reimbursed, should your vehicle repairs exceed three days.
                Subject to assessor evaluation and recommendation based on damage. Applicable to passenger cars and dual purpose vehicles. Hired / rented vehicles excluded.
                </p>
              </div>
            </li>
            <li>
              <label for="eleventh">
                Settlement of Capital Outstanding in Death<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="eleventh" />
              <div class="content">
                <p>
                The complete capital owing under the lease agreement shall be settled in the event of death or total and permanent incapacity of the insured due to an accident involving the insured vehicle, up to a maximum of LKR 500,000.
                only relevant to the passenger car, dual-purpose vehicle, and motor truck categories. Excludes rented automobiles. Not applicable if the settlement of the car claim is based on total loss.
                </p>
              </div>
            </li>
            <li>
              <label for="twelth">
                Safe Travel's 2 in 1 Benefit<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="twelth" />
              <div class="content">
                <p>
                A renewal premium protection where, as long as there aren't more than three claims within the first year of insurance, your renewal premium won't go up. Your eligibility for the no-claim incentive will not change.
                Except for motorcycles, three-wheelers, motor coaches, and rented vehicles, this rule is applicable to all categories of vehicles.
                </p>
              </div>
            </li>

            <li>
              <label for="thirteenth"> Goods Cover<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="thirteenth" />
              <div class="content">
                <p>
                Only for the dual purpose and motor lorry categories, up to LKR 100,000/=. Excludes rented automobiles. excludes strike, riot, and civil unrest coverage (SRCC/TC)
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>



  <?php include "footer.php" ?>
</body>

</html>