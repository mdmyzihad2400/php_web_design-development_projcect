<?php include ("header.php");?>

<div class="main">
    

<h1 style="color: black; padding-left:400px;"> <b>Usser Ragistration</b> </h1>
    <form class="bg-dark p-3 text-info w-50" style="border-radius: 20px; margin:auto;" >     


          <div class="mb-3">
            <label for="name" class="form-label"> Name:</label>
            <input type="text" id="name" class="form-control">
          </div>

           <div class="mb-3">
            <label for="email" class="form-label"> Email:</label>
            <input type="email" id="email" class="form-control">
            <div class="form-text"> You Will Remain Privet. We Will not Share Anyone </div>

           </div>


           <div class="mb-3">
            <label for="number" class="form-label"> Contact:</label>
            <input type="contact" id="contact" class="form-control">

           </div>

            <div class="mb-3">
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="male">
                    <label for="mail"> Male </label>
                </div>
    
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="female">
                    <label for="female"> Female </label>
                </div>
            </div>


            <div class="mb-3">
                <div class="form-checkbox">
                    <input type="checkbox" class="form-check-input" id="tcn">
                    <label for="tcn"> Accepts Terms and Condition </label>
                </div>
    
                <div class="form-checkbox">
                    <input type="checkbox" class="form-check-input" id="tcn">
                    <label for="tcn"> Now You Can Access Your Data in Our Page </label>
                </div>
            </div>



                <div class="mb-3">
                        <label for="depertment"> Depertment</label>
                    <select name="depertment" id="depertment" class="form-select-inline"> 

                        <option value="CSE" selected> CSE </option>
                        <option value="EEE"> EEE </option>
                        <option value="LLB"> LLB </option>
                        <option value="MBBS"> MBBS </option>
                        <option value="DMC"> DMC </option>
                        <option value="BTN"> NTN </option>

                    </select>
                </div>


                    <div class="mb-3">
                        <button class="btn btn-info"> Submit </button>
                    </div>


    </form>




<!-- 
<h1 class="p-2"> Usser Ragistration </h1>
    <form class="bg-dark p-5 text-info w-50 " 
     style="border-radius: 20px; margin:auto;">     


          <div class="mb-3">
            <label for="name" class="form-label"> Name:</label>
            <input type="text" id="name" class="form-control">
          </div>

           <div class="mb-3">
            <label for="email" class="form-label"> Email:</label>
            <input type="email" id="email" class="form-control">
            <div class="form-text"> You Will Remain Privet. We Will not Share Anyone <div>
         </div>


           <div class="mb-3">
            <label for="number" class="form-label"> Contact:</label>
            <input type="contact" id="contact" class="form-control">

           </div>

            <div class="mb-3">
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="male">
                    <label for="mail"> Male </label>
                </div>
    
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="female">
                    <label for="female"> Female </label>
                </div>
            </div>


            <div class="mb-3">
                <div class="form-checkbox">
                    <input type="checkbox" class="form-check-input" id="tcn">
                    <label for="tcn"> Accepts Terms and Condition </label>
                </div>
    
                <div class="form-checkbox">
                    <input type="checkbox" class="form-check-input" id="tcn">
                    <label for="tcn"> Now You Can Access Your Data in Our Page </label>
                </div>
            </div>



                <div class="mb-3">
                        <label for="depertment"> Depertment</label>
                    <select name="depertment" id="depertment" class="form-select-inline"> 

                        <option value="CSE" selected> CSE </option>
                        <option value="EEE"> EEE </option>
                        <option value="LLB"> LLB </option>
                        <option value="MBBS"> MBBS </option>
                        <option value="DMC"> DMC </option>
                        <option value="BTN"> NTN </option>

                    </select>
                </div>


                    <div class="mb-3">
                        <button class="btn btn-info"> Submit </button>

     </div>
 </form>









 

 -->


</div>
        
<?php include ("footer.php");?>
                                  