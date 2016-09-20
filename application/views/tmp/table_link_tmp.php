<div id="paste-table">
  <table class="table table-bordered" style="width:100%;max-width:1000px;margin:auto;">
    <thead>
      <tr>
        <td style="width:50px;"><b>ID</b></td>
        <td><b>ชื่อคู่</b></td>
        <td><b>ลิ้งสตรีม</b></td>
        <td style="width:95px;"><b>วันเวลา</b></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach($links_data as $link): ?>
      <tr class="<?php echo ($link['status']==='active') ? 'success':'danger'; ?>">
        <td><?php echo $link['id'] ?></td>
        <td>
          <a href="#" title="เปิดใช้งาน" class="glyphicon glyphicon-ok" onclick="edit_st(event, <?php echo $link['id'] ?>, 'active')"></a> 
          <a href="#" title="ปิดใช้งาน" class="glyphicon glyphicon-remove" onclick="edit_st(event, <?php echo $link['id'] ?>, 'remove')"></a> 
          <a href="#" title="แก้ไขชื่อ" class="glyphicon glyphicon-edit" onclick="edit(event, <?php echo $link['id'] ?>, 'name', '<?php echo $link['name'] ?>')"></a> - <?php echo $link['name'] ?></td>
        <td><a title="แก้ไขลิ้ง" href="#" class="glyphicon glyphicon-edit" onclick="edit(event, <?php echo $link['id'] ?>, 'link', '<?php echo $link['link'] ?>')"></a> - <?php echo $link['link'] ?></td>
        <td><?php echo $link['datetime'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
