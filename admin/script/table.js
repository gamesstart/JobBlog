$(function() {
$("#checkedAll").click(function() {
if ($(this).attr("checked") == true) { // ȫѡ
   $("input[@name='checkbox_name[]']").each(function() {
   $(this).attr("checked", true);
  });
} else { // ȡ��ȫѡ
   $("input[@name='checkbox_name[]']").each(function() {
   $(this).attr("checked", false);
  });
}
});
});

function ask_edit(type){
        var b = $('input[name="checkbox_name[]"][checked]');
        var str = '';
        var check_value=0;
        $.each(b,function(key,value){
            if(b.size()==(key+1)){
                str += value.value;
            }else{
                str += value.value+",";
            }
            check_value++;
        });
        if(''==str){
            alert('����ѡ��!');
        }else if (check_value>1){
			alert('��ֻ��ѡ��һ�����б༭��鿴!');
        }else{
            window.location="view.php?id="+str+"&action="+type
        }
}
function ask_delete(type){
		
        var b = $('input[name="checkbox_name[]"][checked]');
        var str = '';
        var check_value=0;
        $.each(b,function(key,value){
            if(b.size()==(key+1)){
                str += value.value;
            }else{
                str += value.value+",";
            }
            check_value++;
        });
        if(''==str){
            alert('����ѡ��!');
            return false;
        }
        var rtn = confirm("ȷ��Ҫ��ѡ�е�����ɾ����")
		if (rtn){
             window.location="list.php?id="+str+"&action="+type
        }
        else{
			return false;
		}
}
function ask_exec(type){
        var b = $('input[name="checkbox_name[]"][checked]');
        var str = '';
        var check_value=0;
        $.each(b,function(key,value){
            if(b.size()==(key+1)){
                str += value.value;
            }else{
                str += value.value+",";
            }
            check_value++;
        });
        var username;
		var tels;
		username=document.getElementById("username").value;
		tels=document.getElementById("tels").value;
        window.location="execl.php?id="+str+"&action="+type+"&username="+username+"&tels="+tels;
}
function stat(id){
	var stat
	stat=document.getElementById("pro_name"+id).value;
	window.location.href="list.php?st=1&stat="+stat+"&id="+id;
}
function seach(){
	var username;
	var tels;
	username=document.getElementById("username").value;
	tels=document.getElementById("tels").value;
	window.location.href="list.php?username="+username+"&tels="+tels;
}
function isdel()
{
	if(confirm("ȷ��Ҫɾ����"))
	{
		return true;
	}else
	{
		return false;
	}
}