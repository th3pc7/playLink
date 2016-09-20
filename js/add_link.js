MainProg.config.Page_modules["add_link"] = new PageJS(MainProg, function(Main){
  // this function run first time on load this file success.
  Main.on("submit","#form_add_link",add_link);
},function(Main){
  // this function run on after open this page.
  $.post("./quest/action/",{ action: "give_me_link" },function(data){
    if(data==="pass"){
      alert("สำเร็จ");
      ref();
    }
    else{
      alert(data);
    }
  }).fail(function(){
    alert("เกิดข้อผิดพลาด !!!");
  });
},function(Main){
  // this function run on befor close this page.
});



function add_link(ev){
  ev.preventDefault();
  $.post("./quest/action/",$("#form_add_link").serialize(),function(data){
    if(data==="pass"){
      alert("สำเร็จ");
      ref();
    }
    else{
      alert(data);
    }
  }).fail(function(){
    alert("เกิดข้อผิดพลาด !!!");
  });
}

function edit(ev, id, types, defaults){
  ev.preventDefault();
  var value = prompt("ใส่ค่าใหม่ที่ต้องการ", defaults);
  if(value===defaults||value==='undefined'||value===null||value===''||$.trim(value)===''){ return; }
  $.post("./quest/action/",{ action: "edit", id: id, type: types, value: value },function(data){
    if(data==="pass"){
      alert("สำเร็จ");
      ref();
    }
    else{
      alert(data);
    }
  }).fail(function(){
    alert("เกิดข้อผิดพลาด !!!");
  });
}

function edit_st(ev, id, value){
  ev.preventDefault();
  $.post("./quest/action/",{ action: "edit_st", id: id, value: value },function(data){
    if(data==="pass"){
      alert("สำเร็จ");
      ref();
    }
    else{
      alert(data);
    }
  }).fail(function(){
    alert("เกิดข้อผิดพลาด !!!");
  });
}

function ref(){
  $.post("./quest/action/",{ action: "ref_table" },function(data){
    $("#paste-table").html(data);
  }).fail(function(){ });
}