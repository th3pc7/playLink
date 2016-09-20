<!-- ตัวแปร useScript ต้องใส่ทุกครั้ง สำหรับเรียก JS ของหน้า Page นั้นๆ -->
<script> var useScript = false; </script>

<?php

  // หน้าเพจสามารถ echo ตัวแปรที่อยู่ใน $page_data จาก Controler ได้เลย //
  // ตัวอย่าง echo $test;

  // คำสั่งสำหรับ เรียกใช้ tmp และต้องใส่ $page_data ด้วยทุกครั้ง //
  // ตัวอย่าง $this->page->load_tmp('login_tmp', $page_data);

?>