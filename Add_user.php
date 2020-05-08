<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
    <title>เพิ่มข้อมูลผู้ใช้</title>
  </head>
  <center><h3>เพิ่มข้อมูลผู้ใช้</h3></center>
  <body >
  
 <div class="card"> 
 
  <h5   class="card-header" style="background-color :#e7e1da">ข้อมูลผู้ใช้</h5>
  <div class="card-body" >
  <div class="form-group col-md">
  </div>
  <form>
  <div class="form-group col-md">
    <label for="formGroupExampleInput">ชื่อ</label>
    <input type="text" class="form-control" style="border: 2px solid #e7e1da;id="formGroupExampleInput" placeholder="กรอกชื่อ">
  </div>
  <div class="form-group col-md">
    <label for="formGroupExampleInput2">นามสกุล</label>
    <input type="text" class="form-control"style="border: 2px solid #e7e1da; id="formGroupExampleInput2" placeholder="กรอกนามสกุล">
  </div>
  <div class="form-group col-md">
    <label for="formGroupExampleInput">อีเมล</label>
    <input type="text" class="form-control" style="border: 2px solid #e7e1da;id="formGroupExampleInput" placeholder="กรอกอีเมล">
  </div>
  
  <div class="form-group col-md">
      <label for="disabledSelect">ตำแหน่ง</label>
      <select  style="border: 2px solid #e7e1da; id="disabledSelect" class="form-control">
        
        <option>กรุณาเลือก</option>
        <option>อาจารย์</option>
        <option>นิสิต</option>
        <option>เจ้าหน้าที่</option>
      </select>
 </div>
 
 <div class="form-group col-md">
    <label for="formGroupExampleInput">เบอร์โทร</label>
    <input type="text" class="form-control"style="border: 2px solid #e7e1da;id="formGroupExampleInput" placeholder="กรอกเบอร์โทร">
  </div>
  
    <br>
    <div class="form-group col-md">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        ตรวจสอบข้อมูลครบถูกต้อง
      </label>
    </div>
  </div>
    <center><div class="form-group col-md">
    <button type="button" class="col-md-2  btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">
  บันทึก
   </button>
   </div><?</center>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ยืนยันการเพิ่มข้อมูล</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
คุณกำลังเพิ่มข้อมูล ยืนยันอีกครั้งเพื่อเพิ่มข้อมูลนี้!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger">ยกเลิก</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">ตกลง</button>
            
          </div>
        </div>
      </div>
    </div>
   
</form>
  </div>
</div>
</div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
