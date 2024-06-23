 <div class="container">
    <table border="1" id="test">
        <tr>
            <!-- <th style="width: 305px">Vehicle Company</th> -->
            <th style="width: 315px">Vehicle Name</th>
            <th style="width: 215px">Part Name</th>
            <th style="width: 105px">Quantity</th>
            <th style="width: 150px">MRP</th>
            <th style="width: 105px">Discount</th>
            <th style="width: 155px">Rate</th>
            <th style="width: 125px">GST</th>
            <th style="width: 215px">Total Rate</th>

        </tr>
        <tr>
            
  <td>
          <select  required class="form-control" >
           <option value="" disabled selected>Select Vehicle Name</option>
                    <option value="Mahalaxmi Ploymers Product">Mahalaxmi Ploymer Product</option>
                    <option value="Green Vision Liner Technologies">Green Vision Liner Technologies</option>

                    
          </select>
          
       </td>
      <td><input type="text" name="" placeholder="" class="form-control" required="" minlength="1" maxlength="50"></td>
      <td><input type="text" name="" placeholder="" class="form-control" required="" minlength="1" maxlength="50"></td>
      <td><input type="text" name="" placeholder="" class="form-control" required="" minlength="1" maxlength="50"></td>
      <td><input type="text" name="" placeholder="" class="form-control" required="" minlength="1" maxlength="50"></td>
      <td><input type="text" name="" placeholder="" class="form-control" required="" minlength="1" maxlength="50"></td>

      <td><select class="form-control">
        <option disabled="">Select Gst</option>
          <option>0</option>
          <option>5</option>
          <option>12</option>
          <option>18</option>
          <option>28</option>


      </select></td>
      <td><input type="text" name="" placeholder="" class="form-control" required="" minlength="1" maxlength="50"></td>
        </tr>
        <tr>
            <input type="button" name="add" onclick="addtabalerow()" value="add row">
        </tr>
    </table>
    <BR><BR><BR>
    <div class="form-group pull-right" >
                <button type="submit" class="btn btn-success" style="border-radius: 4px">Create
                </button>
                <a class="btn btn-danger" href="#" style="border-radius: 4px">Cancel</a> 
        </div>



</form>



<div class="col-md-12">
       <table class="table table-bordered" id="tbl_posts">

        <thead>
          <tr>
                <th colspan="10" class="back" style="background-color: #337ab7;color: #fff;"><center><strong>Packeging List</strong></center></th>
            </tr>
          <tr>
              <!-- <tr id="roe"> -->
                <th style="">Sr No</th>
                <th class="back" style="width: 250px;"><center>Vehicle Name</center></th>
                <th class="back" style="width: 200px;"><center>Part Name</center></th>
                <th class="back" style="width: 50px;"><center>Quanitity </center></th>
                <th class="back" style="width: 100px;"><center>MRP</center></th>
                 <th class="back" style="width: 10px;"><center>Discount</center></th>
                 <th class="back" style="width: 100px;"><center>Rate</center></th>
                 <th class="back" style="width: 120px;"><center>GST</center></th>
                 <th class="back" style="width: 130px;"><center>Total Rate</center></th>


                <th><a class="btn btn-success btn-sm add-record" data-added="0"><i class="glyphicon glyphicon-plus"></i></a></th>

                <!-- <th style="width: 315px">Vehicle Name</th>
            <th style="width: 215px">Part Name</th>
            <th style="width: 105px">Quantity</th>
            <th style="width: 150px">MRP</th>
            <th style="width: 105px">Discount</th>
            <th style="width: 155px">Rate</th>
            <th style="width: 125px">GST</th>
            <th style="width: 215px">Total Rate</th> -->
            
            </tr>
          </tr>
        </thead>
        <tbody id="tbl_posts_body">
          <tr id="rec-1">
            <td><span class="sn">1</span>.</td>
            <td><input type="text" name="roll_length"  class="form-control"></td>
            <td><input type="text"  name="width" class="form-control"></td>
            
            <td><input type="text" name="qtyx"  class="form-control"></td>
            <td><input type="text" name="net_weight"  class="form-control"></td>
            <td><input type="text"  name="gross_weight" class="form-control"></td>
          
                
                <td><input type="text"  name="actual_weight" class="form-control"></td>
               <td>
                <select class="form-control">
                    <option disabled="">Select Gst</option>
                      <option>0</option>
                      <option>5</option>
                      <option>12</option>
                      <option>18</option>
                      <option>28</option>


      </select></td>
                <td><input type="text"  name="actual_weight" class="form-control"></td>

                <td><a class="btn btn-danger btn-sm delete-record" data-id="1"><i class="glyphicon glyphicon-minus"></i></a></td>
          </tr>
          
        </tbody>
      </table>
    </div>
    <div style="display:none;">
    <table id="sample_table">
      <tr id="">
        <td><span class="sn">1</span>.</td>
        <td><input type="text" name="roll_length"  class="form-control"></td>
            <td><input type="text"  name="width" class="form-control"></td>
            
            <td><input type="text" name="qtyx"  class="form-control"></td>
            <td><input type="text" name="net_weight"  class="form-control"></td>
            <td><input type="text"  name="gross_weight" class="form-control"></td>
          
                
                <td><input type="text"  name="actual_weight" class="form-control"></td>
            
                
       <td><a class="btn btn-danger btn-sm delete-record" data-id="1"><i class="glyphicon glyphicon-minus"></i></a></td>
     </tr>
   </table>

      </div>