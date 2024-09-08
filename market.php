<?php
$API_KEY = "7211384030:AAG3mrcGhTTmYwyrQJMG-X2-9NZJeLlP0ns"; /*توكنك*/

require "aws.php";
$sudo = 6161133385; /*ايديك*/
//••┉┉┉┉┉┉┉┉┉┉┉┉┉••//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$nammee = $update->callback_query->from->first_name;
$sting = file_get_contents("sting.json");
$ban = file_get_contents("ban.txt");
$banu = file_get_contents("banu.txt");
$banding = explode("\n",$ban);
$exb = explode("\n",$ban);
$aamera = file_get_contents("bandd.txt");
$start = file_get_contents("start.txt") ;
$amera1 = file_get_contents('userstart.json');
$sss = file_get_contents('sss.txt');
$alm = file_get_contents('alm.txt');
$sls = file_get_contents('sls.txt');
$ccc = file_get_contents('ccc.txt');
$htt = file_get_contents('htt.txt');
$tlll = file_get_contents('tlll.txt');
$ccoin = $ccc;// عمولة التحويل
$cccoin = $ccoin;
$type = $update->message->chat->type;
$stinggg = json_decode(file_get_contents("stinggg.json"),true);
$admin[] = "6161133385"; /*ايديك*/
foreach($sting['stinggg']['admin'] as $get){
$admin[] = $get;
}
$admin = $admins[0];
$sttings['id'][] = "$id";
file_put_contents("stats/users.json",json_encode($sttings));
$u = json_decode(file_get_contents('member.json'),true);
if(!in_array($chat_id, $u) and $type == "private") {
      $u[] = "$chat_id";
      file_put_contents('member.json',json_encode($u));
  }
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
$sales = json_decode(file_get_contents('sales.json'),true);
$id=$update->callback_query->from->id;
} 
function save($array){
    file_put_contents('sales.json', json_encode($array));
}
$sttings = json_decode(file_get_contents("tall3.json"),1);
if($sttings["rmm"]==null){
	$sttings["rmm"]=$no3;
	file_put_contents("tall3.json",json_encode($sttings));
	}
	if($sttings["ggl"]==null){
	$sttings["ggl"]=$no3;
	file_put_contents("tall3.json",json_encode($sttings));
	}
	if($sttings["tts"]==null){
	$sttings["tts"]=$no3;
	file_put_contents("tall3.json",json_encode($sttings));
	}
	if($sttings["ssr"]==null){
	$sttings["ssr"]=$no3;
	file_put_contents("tall3.json",json_encode($sttings));
	}
//---------1----
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$stting = file_get_contents("stting.txt");
$dayurl = explode("\n",file_get_contents($d."url.txt"));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wed.txt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
#──────────────
if(in_array($id, $exb)){
if($message){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"عذراً عزيزي $name تم حظرك من قبل المطور البوت 📛",
        'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"👩🏻‍💻 ¦ المطور البوت",'url'=>"t.me/$alm"]],	      ] ])  ]); } 
 if($data){
  bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"عذراً عزيزي $nammee تم حظرك من قبل المطور البوت 📛",
        'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"👩🏻‍💻 ¦ المطور البوت",'url'=>"t.me/$alm"]],	      ] ])  ]); }  return false; }
#──────────────
$getmosh1 = file_get_contents("getmosh1.txt");
$getmoshh1 = explode("\n",$getmosh1);
$getmosh = file_get_contents("getmosh.txt");
$getmoshh = explode("\n",$getmosh);
$channels = file_get_contents("channels.txt");
$channel = file_get_contents("channel.txt");
$setcoin1 = file_get_contents("setcoin1.txt");
#──────────────
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$adminn = "6161133385"; /*ايديك*/
$adminn = "6161133385"; /*ايديك*/
$ch = " ";
$me = bot('getme',['bot'])->result->username;
$sales = json_decode(file_get_contents('sales.json'),1);
if($data == "ssx"){
$user = (file_get_contents("sales.json"));
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📥 ¦ الان اختر ما تريد عمل لة نسخة احتياطية
📤 ¦ لرفع نسخة احتياطية ~ سلع والنقاط ~ ارسل `ارفع :sales.json`
📤 ¦ لرفع نسخة احتياطية ~ أعضاء ~ ارسل `ارفع data:users.json`\n 📛 ¦ يجب ان تعمل رد على الملف ثم اكتب 👆🏻",
    'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'👤 ¦ نسخة الاعضاء','callback_data'=>'a3z'],['text'=>'📦 ¦ ملف السلع والنقاط','callback_data'=>'sl3']],
[['text'=>'رجوع 🔙','callback_data'=>'c']],      ]	])	]); }
if($data == 'sl3'){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFILE("sales.json")]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"نسخة للبيانات ℹ️ \n 📦 تم عمل نسخة إحتياطية بنجاح ✓",
        'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"رجوع 🔙",'callback_data'=>"c"]],	      ] ])  ]); }
if($data == 'a3z'){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFILE("member.json")]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"نسخة لأعضاء 👤 \n📦 تم عمل نسخة إحتياطية بنجاح ✓", 
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"رجوع 🔙",'callback_data'=>"c"]],      ] ])  ]); } 
if($id!=5539142769){
	if($message->chat->type!="private" and $text){
		bot("sendmessage",[
		"chat_id"=>$adminn,
		"text"=>"يوجد شخص يستعمل ثغره الكروب 🔪📛 
		☃ الاسم :  $name ،
☃ المعرف : @$user ، 
☃ الايدي :  $id ،"]);
		bot("leavechat",[
		"chat_id"=>$chat_id, ]);
		return false; }
		bot('leaveChat',[
        'chat_id'=>$chat_id
        ]);
       };
if(preg_match("/(start-100)/",$text) or preg_match("/(start -100)/",$text) or preg_match("/(start@)/",$text) or preg_match("/(start @)/",$text)){
	bot("sendmessage",[
		"chat_id"=>$adminn,
		"text"=>"يوجد شخص يستعمل ثغره /start-100 🔪📛
		☃ الاسم :  $name ،
☃ المعرف : @$user ، 
☃ الايدي :  $id ،" ]);
		return false; }

if(preg_match("/(.*?)start-(.*?)/",$text)){
bot("sendmessage",[
		"chat_id"=>$adminn,
		"text"=>"يوجد شخص يستعمل ثغره /start-100 🔪📛
		☃ الاسم :  $name ،
☃ المعرف : @$user ، 
☃ الايدي :  $id ،" ]);
		return false; }

$idid = file_get_contents("idid.txt");
if($data == "onid" ){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id, 
"text"=>"🔓 ¦ تم تفعيل id بنجاح ✓",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'bbot']]      ]    ])	  ]);
file_put_contents("idid.txt","onid");}
if($data == "offid" ){
bot('EditMessageText' ,[
'chat_id' =>$chat_id,
'message_id'=>$message_id, 
'text'=>"🔐 ¦ تم بنجاح تعطيل id ✓",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'bbot']]
      ]    ])	  ]);
file_put_contents("idid.txt","offid");} 
if($text == "id" or $text == "/id" and $idid =="onid" ){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>$from_id,
'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
 ]);return false;}
//»»»»»»»»»»»»»»»»»» 
if($data == 'c' and $chat_id == $adminn){ 
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 👋🏻
- انت المـطـور الاسـاسـي هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃 
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
       [['text'=>'📥 ¦ نسخة إحتياطية','callback_data'=>'ssx']],
       [['text'=>'🛒 ¦ إضافة سلعة','callback_data'=>'add'],['text'=>'🗑️ ¦ حذف سلعة','callback_data'=>'del']],
       [['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'📦 ¦ تسليم سلعة','callback_data'=>"sendnumber"],['text'=>'📝 ¦ إرسال رسالة','callback_data'=>"sendmessage"]],
       [['text'=>'🤖 ¦ قسم الإعدادات البوت','callback_data'=>"bbot"]],
       [['text'=>'💰 ¦ قسم النقاط ','callback_data'=>"nnn"],['text'=>'📮 ¦ قسم تعيين المعرفات ','callback_data'=>"taan"]],
       [['text'=>'👁️ ¦ إحصائيات البوت','callback_data'=>"hjj"]],
       [['text'=>'♻️ ¦ قسم الإشتراك ','callback_data'=>"ast"],['text'=>'🚫 ¦ قسم الحظر ','callback_data'=>"bann"]],
      [['text'=>'🛃 ¦ قسم الادمنية','callback_data'=>"ttmn"]],
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
      ]	    ])	  ]);
      $stinggg['stinggg']['stinggg'] = null;
	$stinggg['stinggg']['id'] = null;
	file_put_contents("stinggg.json",json_encode($stinggg));
$sales['mode'] = null;
  save($sales);
 }
if($text == '/start' and $chat_id == $adminn){ 
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 👋🏻
- انت المـطـور الاسـاسـي هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
       [['text'=>'📥 ¦ نسخة إحتياطية','callback_data'=>'ssx']],
       [['text'=>'🛒 ¦ إضافة سلعة','callback_data'=>'add'],['text'=>'🗑️ ¦ حذف سلعة','callback_data'=>'del']],
       [['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'📦 ¦ تسليم سلعة','callback_data'=>"sendnumber"],['text'=>'📝 ¦ إرسال رسالة','callback_data'=>"sendmessage"]],
       [['text'=>'🤖 ¦ قسم الإعدادات البوت','callback_data'=>"bbot"]],
       [['text'=>'💰 ¦ قسم النقاط ','callback_data'=>"nnn"],['text'=>'📮 ¦ قسم تعيين المعرفات ','callback_data'=>"taan"]],
       [['text'=>'👁️ ¦ إحصائيات البوت','callback_data'=>"hjj"]],
       [['text'=>'♻️ ¦ قسم الإشتراك ','callback_data'=>"ast"],['text'=>'🚫 ¦ قسم الحظر ','callback_data'=>"bann"]],
       [['text'=>'🛃 ¦ قسم الادمنية','callback_data'=>"ttmn"]],
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
      ]	    ])	  ]);
      $stinggg['stinggg']['stinggg'] = null;
	$stinggg['stinggg']['id'] = null;
	file_put_contents("stinggg.json",json_encode($stinggg));
$sales['mode'] = null;
  save($sales); }
 if($data == 'c' and in_array($chat_id,$stinggg['stinggg']['admins'])){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي ادمن  @$user 👋🏻
- انت ادمن هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
       [['text'=>'🛒 ¦ إضافة سلعة','callback_data'=>'add'],['text'=>'🗑️ ¦ حذف سلعة','callback_data'=>'del']],
       [['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'📦 ¦ تسليم سلعة','callback_data'=>"sendnumber"],['text'=>'📝 ¦ إرسال رسالة','callback_data'=>"sendmessage"]],
       [['text'=>'💰 ¦ قسم النقاط ','callback_data'=>"nadmin"]],
       [['text'=>'👁️ ¦ إحصائيات البوت','callback_data'=>"hjj"],['text'=>'🚫 ¦ قسم الحظر ','callback_data'=>"bann"]],
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
      ]	    ])	  ]);
      $stinggg['stinggg']['stinggg'] = null;
	$stinggg['stinggg']['id'] = null;
	file_put_contents("stinggg.json",json_encode($stinggg));
$sales['mode'] = null;
  save($sales); }
if($text == '/start' and in_array($chat_id,$stinggg['stinggg']['admins'])){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"-  مرحبـٲ عـزيزي ادمن  @$user 👋🏻
- انت ادمن هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
       [['text'=>'🛒 ¦ إضافة سلعة','callback_data'=>'add'],['text'=>'🗑️ ¦ حذف سلعة','callback_data'=>'del']],
       [['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'📦 ¦ تسليم سلعة','callback_data'=>"sendnumber"],['text'=>'📝 ¦ إرسال رسالة','callback_data'=>"sendmessage"]],
       [['text'=>'💰 ¦ قسم النقاط ','callback_data'=>"nadmin"]],
       [['text'=>'👁️ ¦ إحصائيات البوت','callback_data'=>"hjj"],['text'=>'🚫 ¦ قسم الحظر ','callback_data'=>"bann"]],
       [['text'=>'✾⊱━━━━⊰🥀⊱━━━━⊰✾','callback_data'=>"1"]],
      ]	    ])	  ]);
      $stinggg['stinggg']['stinggg'] = null;
	$stinggg['stinggg']['id'] = null;
	file_put_contents("stinggg.json",json_encode($stinggg));
$sales['mode'] = null;
  save($sales); }
         $Arabshadows = file_get_contents("Arabshadows.json");
if($data == "on" and $chat_id == $adminn){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,  
"text"=>"🔓¦ تم تفعيل البوت بنجاح ✓",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'bbot']]
      ]    ])	  ]);
file_put_contents("Arabshadows.json","on");
}
if($data == "off" and $chat_id == $adminn){
bot("EditMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id, 
"text"=>"🔐 ¦ تم بنجاح تعطيل البوت ✓",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'bbot']]
      ]    ])	  ]);
file_put_contents("Arabshadows.json","off");
} 
if($message and $Arabshadows =="off" and $chat_id != $adminn ){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"*👨🏻‍💻 ¦ مرحبا بك عزيزي
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة*",
'parse_mode' =>"MARKDOWN",
 ]); return false;}
if($data == "sendcoin"){
  bot('EditMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id, 
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال النقاط له 🧸",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'الغاء ❌','callback_data'=>'nnn']]
      ]    ])	  ]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل عدد النقاط تريد إرسالها 💰",
       'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'الغاء ❌','callback_data'=>'nnn']]
      ]    ])	  ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'nnn']]
      ]    ])	  ]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"✅ ¦ لقد ربحت « $text » نقطة 💰
🧑🏻‍💻 ¦ من الإدارة 👮🏻‍♂️",  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit; }
if($data == "takecoin"){
  bot('EditMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id, 
   'text'=>"أرسل أيدي الشخص الذي تريد خصم النقاط منه",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'الغاء ❌','callback_data'=>'nnn']]
      ]    ])	  ]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
       'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'الغاء ❌','callback_data'=>'nnn']]
      ]    ])	  ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم خصم $text نقطة من حساب ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"📛 ¦ تم خصم « $text » نقطة 💰
🧑🏻‍💻 ¦ من الإدارة 👮🏻‍♂",  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit; }
if($data == "offerfree"){
           bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
    'text'=>"ارسل عدد النقاط لأصنع رابط هدية صالح لشخص واحد 🎁
      ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'إلغاء ❌','callback_data'=>"c"]],
    ]])     ]);
   file_put_contents("stting.txt","offerfree");           }
           if(is_numeric($text) and $stting == "offerfree"){
            $cod = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,10);
            bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"🎁 ¦ تم صنع رابط هدية بقيمة $text 
الرابط 👇🏻 : 
https://t.me/$me?start=gift=$cod
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'رجوع 🔙','callback_data'=>"c"]],
     ]])    ]);
     file_put_contents($cod.".txt",$cod."\n".$text);
     file_put_contents($d.'.txt',$cod."\n",FILE_APPEND);
     unlink("stting.txt");            }
if($data == "setcoin1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"💰 ¦ ارسل عدد النقاط التي تريد ان يكسبها العضو عند الاشتراك في قناة التمويل
(ارقام فقط) $type",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]
      ]    ])	  ]);
$sales['mode'] = 'coc1';
save($sales);
exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'coc1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حفظ بنجاح ✔️ ',
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]
      ]    ])	  ]);
file_put_contents("setcoin1.txt","$text");
$sales['mode'] = null;
save($sales);
exit; }
if($data == "delchannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" 🗑️ ¦ تم حذف قناة التمويل بنجاح ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]      ]    ])	  ]);
unlink("channels.txt");
unlink("getmosh.txt");
$sales['mode'] = null;
save($sales);
exit; }
#حذف قناة 2
 if($data == "delchannel2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🗑️ ¦ تم حذف قناة التمويل بنجاح ²",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]      ]    ])	  ]);
unlink("channel.txt");
unlink("getmosh1.txt");
$sales['mode'] = null;
save($sales);
exit; }
 #تمويل قناة 1
if($data == "addchannel" and $channels == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦  ارسل معرف القناة لتمويلها 
‼️ ¦ تأكد من البوت مشرفا فيها لكي يتم التحقق من اشتراك العضو فيها ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]      ]    ])	  ]);
$sales['mode'] = 'chs';
save($sales);
exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'chs'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حفظ بنجاح ✔️',
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]      ]    ])	  ]);
file_put_contents("channels.txt",$text);
$sales['mode'] = null;
  save($sales);
  exit; }
 #تمويل قناة 2
if($data == "addchannel2" and $channel == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦  ارسل معرف القناة لتمويلها
‼️ ¦ تأكد من البوت مشرفا فيها لكي يتم التحقق من اشتراك العضو فيها ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]      ]    ])	  ]);
$sales['mode'] = 'ccchs';
save($sales);
exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'ccchs'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حفظ بنجاح ✔️',
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'ast']]      ]    ])	  ]);
file_put_contents("channel.txt",$text);
$sales['mode'] = null;
  save($sales);
  exit; }
 #لا يصير تمويل
if($data == "addchannel" and $channels != null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📛 ¦ ٠لقد تم وضع قناة من قبل وهيه$channels 
الرجاء الحذف اولا ثم وضع قناه جديده",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"حذف القناه 🗑️",'callback_data'=>"delchannel"]],
[['text'=>'رجوع 🔙','callback_data'=>'c']],]]) ]);   }
if($data == "addchannel2" and $channel != null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📛 ¦ لقد تم وضع قناة من قبل وهيه  $channel 
الرجاء الحذف اولا ثم وضع قناه جديده",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"حذف القناه 🗑️",'callback_data'=>"delchannel2"]],
[['text'=>'رجوع 🔙','callback_data'=>'c']],]]) ]);   }
if($data == "sendnumber"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"أرسل أيدي الشخص الذي تريد تسليم السلعة له",]);
  $sales['mode'] = 'chat2';
  save($sales);
  exit;  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat2'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل السلعة مع الكود", ]);
   $sales['mode'] = 'poi2';
   $sales['idd'] = $text;
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'poi2'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال السلعة إلى ".$sales['idd']." بنجاح ", ]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"إيصال طلب...✅
`$text`",
'parse_mode'=>"MARKDOWN",  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit; }
if($data == "sendmessage"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال الرسالة له",]);
  $sales['mode'] = 'chat3';
  save($sales);
  exit;  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat3'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل رسالتك",
 ]);
   $sales['mode'] = 'poi3';
   $sales['idd'] = $text;
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'poi3'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال الرسالة إلى ".$sales['idd']." بنجاح ",]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"$text", ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit; }
if($data == "sendwarning"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال التحذير له",]);
  $sales['mode'] = 'chat4';
  save($sales);
  exit;  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat4'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "إضغط /Confirm لتأكيد إرسال التحذير", ]);
   $sales['mode'] = 'poi4';
   $sales['idd'] = $text;
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'poi4'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال التحذير إلى ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"*📛 تحذير من الإدارة 📛
إستعمال حسابات وهمية الدخول لرابطك بها يؤدي إلى حظر حسابك 👉
في حال إستعمال الوهمي سينحظر حسابك... إنتبه ... شكرا على تفهمك للموضوع 📌*",
 'parse_mode'=>'MarkDown', ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit; }
if($message->reply_to_message->document and preg_match('/ارفع .*/',$text)){
$text = str_replace('ارفع ','',$text);
$ex= explode(":" ,$text);
$dir= $ex['0'];
$dir= trim($dir);
$namefile= $ex['1'];
$namefile= trim($namefile);
   mkdir($dir);
     $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
     file_put_contents("$dir/".$namefile,file_get_contents($file));
  bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"تم رفع الملف بنجاح 
$dir/$namefile",
         ]);	 }
if($data == 'bbot'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم الإعدادات البوت🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'📬 ¦ تعيين رسالة الترحيب','callback_data'=>"start"]],
       [['text'=>'🤖 ¦ تفعيل البوت','callback_data'=>"on"],['text'=>'🚫 ¦ تعطيل البوت','callback_data'=>"off"]],
       [['text'=>'📮 ¦ تعيين تعليمات البوت','callback_data'=>"tl"]],
       [['text'=>'🆔 ¦ تفعيل ايـIDــدي','callback_data'=>"onid"],['text'=>'🚫 ¦ تعطيل ايـIDــدي','callback_data'=>"offid"]],
	   [["text"=>"🚸 ¦ تفعيل تنبية الدخول","callback_data"=>"onn"],["text"=>"🚫 ¦ تعطيل تنبية الدخول","callback_data"=>"offf"]],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }
$band = explode("\n",file_get_contents("ban.txt"));
$banb = count($band);
if($data == 'bann'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم حظر 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"📛 ¦ المحظورين «".$banb."»",'callback_data'=>"thba"]],
[['text'=>"🚷 ¦ حظر عضو",'callback_data'=>"ban"],['text'=>"🚫 ¦ الغاء حظر",'callback_data'=>"unban"]],
[['text'=>"🗑️ ¦ حذف المحظورين",'callback_data'=>"deba"]],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }
if($data == 'ast'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم الإشتراك 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"👥 ¦ تمويل قناة ¹",'callback_data'=>"addchannel"],['text'=>"✖️ ¦ حذف تمويل قناة ¹",'callback_data'=>"delchannel"]],
       [['text'=>"💰 ¦ تحديد نقآط الاشتراك في قناة",'callback_data'=>"setcoin1"]],   
       [['text'=>"👥 ¦ تمويل قناة ²",'callback_data'=>"addchannel2"],['text'=>"✖️ ¦ حذف تمويل قناة ²",'callback_data'=>"delchannel2"]],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }
      if($data == 'taan' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم تعيين المعرفات 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"👩🏻‍💻 ¦ تعيين معرف المطور",'callback_data'=>"alm"],['text'=>'📡 ¦ تعيين قناة إثباتات','callback_data'=>'shh']],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }
$adminss = count($stinggg['stinggg']['admins']);
if($data == 'ttmn' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم الادمنية 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
[['text'=>"🕴🏻 ¦ الادمنية «".$adminss."» ",'callback_data'=>"admins"]],
[['text'=>"🧰 ¦ رفع مشرف",'callback_data'=>"addadmin"],['text'=>"🎭 ¦ تنزيل مشرف ",'callback_data'=>"deladmin"]],
       [['text'=>'🗑️ ¦ مسح الادمنية','callback_data'=>'deladm']],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }
      $rm10 = $sttings["rmm"];
      $rm20 = $sttings["ggl"];
            $rm30 = $sttings["tts"];
            $rm40 = $sttings["ssr"]; 
      $adaa .= "عدد الذين شاهدو";
            if($data == 'hjj'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📊︙احصائيات البوت
 — — — — — — — — —
👥︙عدد مشتركين البوت « $Members »
📮︙$adaa تعليمات البوت « $rm10 »
🎁︙عدد الذين اخذو هدية اليومية « $rm20 »
🛍️︙عدد الطلبات تم تسليمها « $rm30 »
🎥︙$adaa شرح بوت « $rm40 »
 — — — — — — — — —",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }
if($data == 'nnn'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم النقاط 🍃",
'parse_mode'=>'MarkDown',
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'💰 ¦ تعيين عدد نقاط الدعوة','callback_data'=>"sls"]],
       [['text'=>'🏆 ¦ إنشاء هدية','callback_data'=>"offerfree"],['text'=>'🎁 ¦ تعيين الهدية اليومية','callback_data'=>"htt"]], 
       [['text'=>'🔄 ¦ تعيين عمولة تحويل','callback_data'=>"ccc"]],
       [['text'=>'💸 ¦ إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'📤 ¦ خصم نقاط','callback_data'=>"takecoin"]],
       [['text'=>"🗑️ ¦ تصفير البوت",'callback_data'=>"dalesal"]],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }      
      if($data == 'nadmin'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي في قسم النقاط 🍃",
'parse_mode'=>'MarkDown',
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'🏆 ¦ إنشاء هدية','callback_data'=>"offerfree"]],
       [['text'=>'💸 ¦ إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'📤 ¦ خصم نقاط','callback_data'=>"takecoin"]],
       [['text'=>'رجوع 🔙','callback_data'=>'c']],      ] ])  ]); }      
      if($data =="thba"){
	for($engineer = 0;count($banding) < $engineer;$engineer++){
		$lister = $lister.$banding[$engineer];
	}
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"*اهلا عزيزي المطور اليك قائمة المحظورين 📛*
♡⧿⧿⧿ツ⧿⧿⧿♡
$ban
♡⧿⧿⧿ツ⧿⧿⧿♡",
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>"🗑️ ¦ حذف المحظورين",'callback_data'=>"deba"]],
       [['text'=>'رجوع 🔙','callback_data'=>'bann']],]	])	]);	}
if($data =="deba"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم حذف المحظورين بنجاح ✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'bann']],] ]) ]);
unlink("banu.txt");
unlink("ban.txt");
}
if($data =="ban"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل ايدي العضو لـــ حظره 🚫", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'bann']],]	])	]);
file_put_contents("bandd.txt","ban");
}
$uio = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getchat?chat_id=".$text))->result->username;
if($text and $aamera =="ban" and $chat_id == $adminn){ 
file_put_contents("ban.txt",$text."\n",FILE_APPEND);
file_put_contents("banu.txt","@".$uio."\n",FILE_APPEND);
unlink('bandd.txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حظر العضور بنجاح ✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'bann']],]	])	]);
unlink('bandd.txt');
bot('SendMessage',[
'chat_id'=>$text,
'text'=>"تم حظرك من قبل المطور لايمكنك استخدام البوت 📛",]);	}
if($data =="unban"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل ايدي العضو لـــ الغاء حظره ⚜️", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'bann']],]	])	]);
file_put_contents("bandd.txt","unban");}
if($text and $aamera =="unban" and $id ==$admin){
$bn = str_replace($text."\n",'',$ban);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الغاء حظر العضور بنجاح ✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'bann']],]	])	]);
file_put_contents("ban.txt",$bn);
unlink("bandd.txt");
bot('SendMessage',[
'chat_id'=>$text,
'text'=>"تم الغاء حظرك من البوت 😃",]);	}
       if($data == "admins"){
		foreach($stinggg['stinggg']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n"; } }
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	تفضل عزيزي الأدمن ⁦
 قائمة الأدمنة 📃
	$addmins
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'🗑️ ¦ مسح الادمنية','callback_data'=>'deladm']],
[['text'=>'رجوع 🔙','callback_data'=>'ttmn']],]])]);
		}
		if($data =="deladm"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم حذف الادمنية بنجاح ✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>'رجوع 🔙','callback_data'=>'ttmn']],] ]) ]);
unlink("stinggg.json");
}
if($data == 'start'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ارسل نص ترحيب يمكنك وضع ماركدون ☑ ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'bbot']]      ]	    ])	  ]);
file_put_contents("start.txt","ok");
 }
if($text and $start == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ ترحيب بنجاح ☑️",
'parse_mode' =>"MARKDOWN",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'bbot']]      ]    ])	 ]);
file_put_contents("start.txt","$text");
 }
if($data == 'shh'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل معرف قناة إثباتات 🍃\nارسل معرف مـ@ــع",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'taan']]      ]	    ])	  ]);
file_put_contents("sss.txt","ok");
 }
if($text and $sss == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين القناة إثباتات بنجاح ☑️",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'taan']]      ]    ])	 ]);
file_put_contents("sss.txt","$text");
 }
   if($data == 'tl'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل تعليمات البوت 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'bbot']]      ]	    ])	  ]);
file_put_contents("tlll.txt","ok");
 }
if($text and $tlll == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ تعليمات البوت ☑️",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'bbot']]      ]    ])	  ]);
file_put_contents("tlll.txt","$text");
 }
 if($data == 'alm'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل معرف المطور 🍃\nارسل معرف بدون @",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'taan']]      ]    ])	  ]);
file_put_contents("alm.txt","ok");
 }
if($text and $alm == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين معرف المطور بنجاح ☑️",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'taan']]      ]    ])	  ]);
file_put_contents("alm.txt","$text");
 }
  if($data == 'sls'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل عدد نقاط الدعوة 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'nnn']]      ]	    ])	  ]);
file_put_contents("sls.txt","ok");
 }
if($text and $sls == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ عدد نقاط الدعوة ☑️",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'nnn']]      ]    ])	  ]);
file_put_contents("sls.txt","$text");
 }
   if($data == 'ccc'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل عدد نقاط عمولة تحويل 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'nnn']]      ]	   ])	  ]);
file_put_contents("ccc.txt","ok");
 }
if($text and $ccc == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ عدد نقاط عمولة تحويل ☑️",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'nnn']]      ]	    ])	  ]);
file_put_contents("ccc.txt","$text");
 }
    if($data == 'htt'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل عدد نقاط هدية يومية 🍃",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'nnn']]      ]	    ])	  ]);
file_put_contents("htt.txt","ok");
 }
if($text and $htt == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ عدد نقاط هدية يومية ☑️",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'nnn']]      ]    ])	  ]);
file_put_contents("htt.txt","$text");
 }
		 #اضافه ادمن
if($data == "addadmin" or $data == "deladmin"){
									$a = str_replace(['addadmin','deladmin'],['لأرفعه أدمن ⁦☺️⁩','لأزيله من قائمة الأدمنة 😼'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
🆔 ¦ أرسل الان ايدي الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إلغاء ❎",'callback_data'=>"ttmn"]],]])]);
$stinggg['stinggg']['stinggg'] = $data;
$stinggg['stinggg']['id'] = $from_id;
	file_put_contents("stinggg.json",json_encode($stinggg));
									}
									if(!$update->callback_query){
						if($text != null and $stinggg['stinggg']['stinggg'] == "addadmin" or $stinggg['stinggg']['stinggg'] == "deladmin" and $stinggg['stinggg']['id'] == $from_id){
							$a = str_replace(['addadmin','deladmin'],['رفعه بنجاح 😉','تنزيله بنجاح 😏'],$stinggg['stinggg']['stinggg']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"تم $a",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'رجوع 🔙','callback_data'=>'ttmn']
],]])]);
if($stinggg['stinggg']['stinggg'] == "addadmin"){
	$stinggg['stinggg']['admins'][] = $text;
	bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"👨🏻‍💻 ¦ اهلاً عزيزي تم رفعك مشرف في البوت ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⌨️ ¦ لوحة التحكم','callback_data'=>'c']
],]])]);
	}else{
		foreach($stinggg['stinggg']['admins'] as $num => $json){
			if($json == $text){
		unset($stinggg['stinggg']['admins'][$num]);
		bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"⭕ ¦ عذراً عزيزي تم تنزلك مشرف من البوت", ]); 
break; } } }
					$stinggg['stinggg']['stinggg'] = null;
					$stinggg['stinggg']['id'] = null;
	file_put_contents("stinggg.json",json_encode($stinggg));   }}
  if($data == 'dalesal'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'هل انت متأكد من انك تريد حذف جميع احصائيات البوت؟؟!',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'نعم✅!','callback_data'=>'cd2']],
      [['text'=>'رجوع 🔙','callback_data'=>'nnn']]     ]    ])	  ]);
  exit; }
 if($data == 'cd2'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم حذف جميع إحصائيات بنجاح ☑️',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'c']]      ]    ])	  ]);
  unlink('sales.json');
  unlink('tlll.txt');
  unlink('htt.txt');
  unlink('ccc.txt');
unlink('sls.txt');
unlink('alm.txt');
unlink('sss.txt');
unlink('userstart.json');
unlink('start.txt');
unlink('bandd.txt');
unlink('banu.txt');
unlink('ban.txt');
unlink('member.json');
unlink('tall3.json');
unlink('users.json');
unlink('Member.txt');
unlink('users.json');
unlink('Sat.txt');
unlink('The.txt');
unlink('ontn.txt');
unlink('info.json');
unlink('admin2.txt');
unlink('Tue.txt');
unlink('stinggg.json');
  exit; }
if($data=="onn"){
$sales['onn']="onn";
save($sales);
bot('EditMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id, 
   'text'=>"🚸 ¦ تم تفعيل تنبية الدخول",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'c']]      ]])]);}
if($data=="offf"){
bot('EditMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id, 
   'text'=>"🚸 ¦ تم تعطيل تنبية الدخول",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'c']]      ]])]);
unset($sales['onn']);
save($sales);}
 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'✵ قم بأرسال اسم السلعة 📬',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'c']]      ]	    ])	  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"- تم حفظ الاسم سلعة ☑️ \n الان ارسل عدد النقاط سلعة 💰"  ]);
  $sales['n'] = $text;
$sales['s'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الإسم والسعر... ☑
📮 ¦ إسم السلعة: $sales[n] ، 
💰 ¦ السعر: $text ، 
🏷 ¦ الكود: ($code) ، 
📚 ¦ ارسل السلعة اللذي تريد تسليمه  تلقائياً ، ",
         "parse_mode"=>"markdown"  ]); 
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $text;
$sales['a']=$text;
  $sales['n'] = null;
  $sales['mode'] = "file";
  $sales["baageel"]=$code;
  save($sales);
  exit;
 }
 if($text != '/start'  and $sales['mode'] == 'file'){
 if($message->document){
 	$file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
	$file_id=$message->video->file_id;
	$ty="video";
	}elseif($message->text){
	$file_id=$text;
	$ty="text";
}elseif($message->photo){
	$file_id=$message->photo[0]->file_id;
	$ty="photo";
	}
 $sales['sales'][$sales["baageel"]]['file']=$file_id;
 $sales['sales'][$sales["baageel"]]['file2']=$ty;
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"☑️ ¦ تم حفظ السلعة ارسل القسم مناسب 
ملفات ⇄ المواقع ⇄ ارقام ⇄ اكواد ⇄ برامج ⇄ مدفوعه ⇄ الشروحات ⇄ اليوزرات ⇄ حسابات ⇄ ثغرات ⇄ اندكس ⇄ ادوات ⇄ ثيمات ⇄BIN ⇄  كليشات ⇄ تريمكس ⇄ تمويل ⇄ أرباح ⇄ هاشتاج "]);
  $sales['mode'] = "type";
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'type'){
   $types=array("ملفات","اكواد","ارقام","المواقع","برامج","مدفوعه","الشروحات","اليوزرات","حسابات","ثغرات","اندكس","ادوات","ثيمات","BIN","كليشات","تريمكس","ارباح","تمويل","هاشتاج");
 if(in_array($text,$types)){
 	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'☑ ¦ تم حفظ السلعة ~ /start'   ]);
  $sales["sales"][$sales["baageel"]]["type"]=$text;
 $eeaa= $sales["sales"][$sales["baageel"]]["type"];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
  $sales['baageel'] = null;
  $sales['mode'] = null;
  save($sales);
 }else{
 	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'📛 ¦ عذرا عزيزي المطور
   عليك بكتابة القسم بشكل صيحيح
الان قم بارسال نوع السلعه 
ملفات ⇄ المواقع ⇄ ارقام ⇄ اكواد ⇄ برامج ⇄ مدفوعه ⇄ الشروحات ⇄ اليوزرات ⇄ حسابات ⇄ ثغرات ⇄ اندكس ⇄ ادوات ⇄ ثيمات ⇄BIN ⇄  كليشات ⇄ تريمكس ⇄ تمويل ⇄ أرباح ⇄ هاشتاج '   ]); }  
     $dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$ss=$sales['s'];
$aa=$sales['a'];
$day = date('j');
  bot('sendMessage',[
   'chat_id'=>$sss,
   'text'=>"- تم اضافة سلعة جديدة ✅
- من ماركت : @$me 🤍

🏷 ¦ السلعة :- *$ss* 📱
💰 ¦ السعر :- *$aa*
🔰 ¦ في القسم :- *$eeaa*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*",
'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"بوت الماركت 🤖",'url'=>"https://t.me/$me?start"] ] ] ])  ]);
unset($sales['s']); }
 if($data == 'del'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"أرسل كود السلعة 📮 \nللتأكيد الحذف 🗑️",
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'c']]      ]	    ])	  ]);
  $sales['mode'] = 'del';
  save($sales);
  exit; }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحذف بنجاح... ☑
   إسم السلعة💸 : '.$sales['sales'][$text]['name'].'
السعر : '.$sales['sales'][$text]['price'].'
الكود: '.$text  ]);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'خطأ - الكود غير صحيح ✖️'   ]);	  }	}
if(preg_match('/\/(start)(.*)/', $text)){
 $ex = explode(' ', $text);
if($chat_id == $ex[1]){
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"⛔️ ¦ عذراً لايمكنك الانضمام عن طريق رابط الدعوة الخاص بك",]);
     exit;}}
 if(preg_match('/\/(start)(.*)/', $text )){
  $ex = explode(' ', $text);
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
    $sales[$chat_id]['Arabshadows']=$ex[1];
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }	  }
  $status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$chat_id])->result->status;
  if($status == 'left'){
   bot('sendMessage',[
       'chat_id'=>$chat_id,
           'text'=>"
📛︙عذراً عزيزي \n\n⚜️︙يجب عليك الاشتراك في قناة المطور أولاً\n\n♻️︙اشترك ثم ارسل /start 
 — — — — — — — — —
[القناة](t.me/ArabShadows)
",
       'reply_to_message_id'=>$message->message_id, 
       'parse_mode'=>"markdown",
   ]);   exit();  }
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);  }
 if(preg_match("/\/(start)/",$text )){
    $sales[$sales[$chat_id]['Arabshadows']]['collect'] += $sls;
    save($sales);
    bot('sendmessage',[
    'chat_id'=>$sales[$chat_id]['Arabshadows'],
"text"=>"لقد دخل شخص 👤\nلرابط الدعوة الخاص بك 😃\nولقد ربحت $sls نقطة 💰
         معلومات عنة 🧐                  \n🆔 ¦ ايدية :- [$from_id](tg://user?id=$chat_id)\nⓂ️ ¦ معرفة ان وجد : @$user\n✨ ¦ اسمة : $name\n💰 ¦ عدد نقاطك الان : ".$sales[$sales[$chat_id]['Arabshadows']]['collect'],
         'parse_mode'=>"MARKDOWN",
    ]);
        $sales[$chat_id]['Arabshadows']=0;
    save($sales);
    $start = str_replace('#name',$name,$start);
$start = str_replace('#id',$chat_id,$start);
$start = str_replace('#username',$username,$start);
    $start = str_replace('#points',$sales[$chat_id]['collect'],$start);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$start",
'parse_mode'=>'MarkDown',
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>'🛒 ¦ شراء سلعة','callback_data'=>'ktmat'],['text'=>'💰 ¦ جمع النقاط','callback_data'=>'col']],
    [['text'=>'🎥 ¦ شرح البوت','callback_data'=>'about'],['text'=>'💸 ¦ شراء النقاط','callback_data'=>'buy']],[['text'=>'📮 ¦ تعليمات البوت','callback_data'=>'tll'],['text'=>'🗑️ ¦ تصفير نقاطي','callback_data'=>'nqq']],[['text'=>"📡 ¦ قناة البوت",'url'=>"t.me/Arabshadows"]],
  ]    ])	  ]);	 }} 
if($data == 'back'){
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);  }
  $sales[$chat_id]['mode']=null;
save($sales);
  $start = str_replace('#name',$nammee,$start);
 $start = str_replace('#id',$chat_id,$start);
 $start = str_replace('#username',$username,$start);
    $start = str_replace('#points',$sales[$chat_id]['collect'],$start);
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"$start",
    'parse_mode'=>"MarkDown",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>'🛒 ¦ شراء سلعة','callback_data'=>'ktmat'],['text'=>'💰 ¦ جمع النقاط','callback_data'=>'col']],
    [['text'=>'🎥 ¦ شرح البوت','callback_data'=>'about'],['text'=>'💸 ¦ شراء النقاط','callback_data'=>'buy']],[['text'=>'📮 ¦ تعليمات البوت','callback_data'=>'tll'],['text'=>'🗑️ ¦ تصفير نقاطي','callback_data'=>'nqq']],[['text'=>"📡 ¦ قناة البوت",'url'=>"t.me/Arabshadows"]],
  ] 	   ])	  ]);	
  bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"🔝 قائمة الرئيسية 🔝",
     ]); }
    if ($data == "ktmat") {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "👋🏻 ¦أهلاً بك عزيزي في قسم 《 الخدمات 》\n قم باختيار القسم المناسب \nثم اختر السلعة الذي تريد شرائها.",
      'reply_markup' => json_encode([
        'inline_keyboard' => [
        [['text'=>'🛍️ ¦ قسم السلع المدفوعة','callback_data'=>'sales#مدفوعه']],
[['text'=>'🗂️ ¦ قسم الملفات','callback_data'=>'sales#ملفات'],['text'=>'📜 ¦ قسم الأكواد','callback_data'=>'sales#اكواد']],
[['text'=>'📚 ¦ قسم الشروحات','callback_data'=>'sales#الشروحات']],
[['text'=>'🖇️ ¦ قسم المواقع','callback_data'=>'sales#المواقع'],['text'=>'📲 ¦ قسم البرامج','callback_data'=>'sales#برامج']],
[['text'=>'🎗️ ¦ قسم اليوزرات','callback_data'=>'sales#اليوزرات']],
[['text'=>'🧾 ¦ قسم الحسابات','callback_data'=>'sales#حسابات'],['text'=>'☎️ ¦ قسم الأرقام','callback_data'=>'sales#ارقام']],
[['text'=>'💻 ¦ قسم ثغرات','callback_data'=>'sales#ثغرات']],
[['text'=>'🗳️ ¦ قسم اندكسات','callback_data'=>'sales#اندكس'],['text'=>'🛠️ ¦ قسم الأدوات','callback_data'=>'sales#ادوات']],
[['text'=>'🧩 ¦ قسم ثيمات','callback_data'=>'sales#ثيمات']],
[['text'=>'💳 ¦ قسم BIN - VISA','callback_data'=>'sales#BIN'],['text'=>'🎭 ¦ قسم تريمكس','callback_data'=>'sales#تريمكس']],
[['text'=>'📝 ¦ قسم كليشات','callback_data'=>'sales#كليشات']],
[['text'=>'💸 ¦ قسم الأرباح','callback_data'=>'sales#ارباح'],['text'=>'👥 ¦ قسم التمويل','callback_data'=>'sales#تمويل']],
[['text'=>'#️⃣ ¦ قسم هاشتاج ','callback_data'=>'sales#هاشتاج']],
[['text'=>'🔍 ¦ بحث عن السلعة','callback_data'=>'search']], 
[['text'=>"القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 	   ])	  ]);	 
          bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"🛍️ قسم الخدمات 🛍️",     ]); } 
       if(preg_match("/^\/(start)(.*)/s",$text)){
$ex1 = explode(' ',$text);
 $ex = explode('=',$ex1[1]);
if($ex[0] == "gift"){
$cood = explode("\n",file_get_contents($ex[1].".txt"));
$coin = $cood[1];
 if(in_array($ex[1],$day)){
 if(is_file($ex[1].'.txt')){
    bot('sendmessage',[
   'chat_id'=>$adminn,
   'text'=>"🧸 دخل شخص وجاري ارسال النقاط لة
   ",'parse_mode'=>"MarkDown"]);
   unlink($ex[1].'.txt');
$sales[$from_id]['collect'] += $coin;
save($sales);
    bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>" 🤑 ¦ لقد ربحت $coin نقطة  ",
'reply_to_message_id'=>$message_id
]);
 bot('sendmessage',[
   'chat_id'=>$adminn,
   'text'=>"لقد دخل شخص لرابط الهدية 🕴🏻
معلوماته ☃
• الاسم :  [$name](tg://user?id=$chat_id) 
• المعرف : [@$user] 
• الايدي :  $id
• عدد النقاط التي حصل عليها : $coin
• عدد نقاط العضو : ".$sales[$chat_id]['collect']."
   ",'parse_mode'=>"MarkDown"]);
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>" ♨️ ¦ عذراً تم أخذ الهدية من شخص قبلك 
   ",'reply_to_message_id'=>$message_id,]);
   }  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"📛 ¦ عذراً الرابط غير صحيح
   ",'reply_to_message_id'=>$message_id,]);
   }	 }	}
     if($data == "chs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦ اشترك في القنوات التالة واحصل على $setcoin1 نقطة 💰",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"📡 ¦ القناة الاولى 1",'callback_data'=>"ch1"],['text'=>"📡 ¦ القناة الثانية 2",'callback_data'=>"ch2"]],
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]	])	]);	}
if($data == "ch2"){
if($chat_id == in_array($chat_id,$getmoshh1) or $channel == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❎ ¦ لايوجد قناة تمت اضافتها هنا
⏳ ¦ يرجى المحاولة مره اخرى لاحقا ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]	])	]);	}
else {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦ اشترك في قناة التالية : $channels
💰 ¦ واحصل على $setcoin1 نقطه",
[['text'=>"📡 ¦ اشتراك في القناة",'url'=>"t.me/$channel"]], 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"♻️ ¦ تحقق من الإشتراك",'callback_data'=>"yesss"]],
]	])	]);	}	}
if($data == "ch1"){
if($chat_id == in_array($chat_id,$getmoshh) or $channels == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❎ ¦ لايوجد قناة تمت اضافتها هنا 
⏳ ¦ يرجى المحاولة مره اخرى لاحقا ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]	])	]);	}
else {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦ اشترك في قناة التالية : $channels
💰 ¦ واحصل على $setcoin1 نقطه",
[['text'=>"📡 ¦ اشتراك في القناة",'url'=>"t.me/$channels"]], 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"♻️ ¦ تحقق من الإشتراك",'callback_data'=>"yess"]],]	])	]);	}	}
if($data == "yess"){
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channels&user_id=".$chat_id);
if((strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
	 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>'📛 ¦ اشترك بقناة أولاً',
      'show_alert'=>true, ]);
}else{
file_put_contents("getmosh.txt","$chat_id\n",FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔰 ¦ تم تحقيق من انضمامك بالقناة ✔️
  💰 ¦ حصلت على  $setcoin1  نقطة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],]	])	]);
$sales[$chat_id]['collect'] += $setcoin1;
file_put_contents("sales.json",json_encode($sales));
save($sales); }	}
if($data == "yesss"){
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channel&user_id=".$chat_id);
if((strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
	 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>'📛 ¦ اشترك بقناة أولاً',
      'show_alert'=>true, ]);
}else{
file_put_contents("getmosh1.txt","$chat_id\n",FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔰 ¦ تم تحقيق من انضمامك بالقناة ✔️
  💰 ¦ حصلت على  $setcoin1  نقطة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],]	])	]);
$sales[$chat_id]['collect'] += $setcoin1;
file_put_contents("sales.json",json_encode($sales));
save($sales); }	} 
 if($data == "refccoin"){
  bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"🆔 ¦ أرسل الان ايدي الشخص الذي تريد ارسال نقاط له وعدد النقاط بسطر ثاني ☑️\nگ مثل 👇
5539142769\n50
💱 ¦ عمولة التحويل هي $ccoin نقطة 💰
        " ,      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']],
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]])	    ]);	  }
 $addcoin = explode("\n",$text);
  $getchat = bot('getchat',['chat_id'=>$addcoin[0]])->ok;
  if($addcoin[0] and $addcoin[1]){
   $b = str_replace('-','',$addcoin[1]);
if(!preg_match("/(-)/", $addcoin[1]) and is_numeric($addcoin[1])){
   if($getchat == "true"){
    $ccoin = $addcoin[1] + $cccoin;
    if($sales[$chat_id]['collect'] >= $ccoin){
     $sales[$chat_id]['collect'] -= $ccoin;
     $sales[$addcoin[0]]['collect'] += $addcoin[1];
     save($sales);
     bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"☑️ ¦ تم تحويل ".$addcoin[1]." نقطة ل ".$addcoin[0]." 💰
💸 ¦ نقاطك الان ".$sales[$chat_id]['collect']." نقطة 💰
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,]);
 bot('sendmessage',[
 'chat_id'=>$addcoin[0], 
 'text' =>"♻️ ¦ تم تحويل لك ".$addcoin[1]." نقطة 💰
🎫 ¦ من الايدي $from_id 
💰 ¦ نقاطك الان ".$sales[$addcoin[0]]['collect']." نقطة 💰 "]);
     }else{
      bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"📛 ¦ نقاطك غير كافية للتحويل 💱
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,]);     }
    }else{
     bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"📛 ¦ هذا الشخص قد قام بحظر البوت او انه ليس مشترك في البوت ونحن لا نستطيع ارسال له النقاط 💰
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,]);    }
   }else{
    bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"📛 ¦ عذرا هذه طريقة غير مشروعة لاخذ نقاط 😒
✅ ¦ تم خصم منك 30 نقطة لفعلك هذا 🔪
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,]);
bot('sendmessage',[
 'chat_id'=>$adminn, 
 'text' =>" مرحبا مطوري 👩🏻‍💻
 هناك شخص يستعمل طريقة غير مشروعة لربح النقاط 😡
 اسمه $name
 ايديه $from_id
 تم خصم منه 30 نقطة 😌
 ",'parse_mode'=>"MarkDown", ]);
$sales[$chat_id]['collect'] -= 30;
save($sales);
    }	   }
if($data=="search"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📦 ¦ أرسل إسم السلعه
گ مثال:-
فيسبوك",
'parse_mode' => "MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"ktmat"]],
    ]    ])  ]);
  $sales[$chat_id]["mode"]="search";
  save($sales);
  exit; }
if($sales[$chat_id]["mode"]=="search"and $text){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"جاري البحث...♻️",  ]);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'إسم السلعة 🔖','callback_data'=>'s'],['text'=>'السعر 💰','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if(preg_match("/$text/",$sale["name"])||preg_match("/$text/",$name)){
  $co=$sales["sales"][$code]["country"];
  $ap=$sales["sales"][$code]["apps"];
  $count=json_decode(file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$API_KEYsim&action=getNumbersStatus&country=$co"),1); 
  $a=$count[$ap."_0"];
  if($a==0){
  $a="⛔"; 
  }else{
   $a="✔️ ¦ $a";   } 
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code]];
  }   }
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);  }
$reply_markup['inline_keyboard'][] = [['text'=>'','callback_data'=>'back'],['text'=>'العودة إلى قائمة الخدمات 🔙','callback_data'=>'ktmat']];
  $reply_markup = json_encode($reply_markup);
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'👋🏻 ¦ اهلاً عزيزي
🔍 ¦ اليك السلع التي تبحث عنها',
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]["mode"]="";
  save($sales);
  exit; }
 if($data == 'buy'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'للشراء إضغط على زر شراء النقاط 💰
وسيحولك إلى المطور البوت قم برسلته فقط لشراء... 💸',
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💰 ¦ شراء النقاط",'url'=>"t.me/$alm"],['text'=>"القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 	   ])	  ]);	 
          bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"💸 شراء نقاط 💸",     ]);} 
if($data == "about"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🤖 ¦ البوت بسيط ولا يحتاج لشرح أصلاً...🗣

ولكن على كل حال هذا شرح سريع 🏃🏻‍♂️",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"1 ¦ الخطوة الأولى",'callback_data'=>"k1"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ]    ])	  ]);
          bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"🎥 شرح البوت 🎥",     ]); 
 $sttings["ssr"]+=1;
file_put_contents("tall3.json",json_encode($sttings));	 }
if($data == "k1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"بعد الدخول للبوت إضغط على زر تجميع النقاط وبعدها سيرسل البوت لك رابط خاص بك فقط قم بنشره وأي شخص يدخل على الرابط تحصل على 1 نقطة 💰",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"2 ¦ الخطوة الثانية",'callback_data'=>"k2"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 	   ])	  ]);	 }
if($data == "k2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔖 ¦ بعد جمع عدد جيد من النقاط 
⌨ ¦ إضغط على زر  شراء سلعة🛒 وبعدها
💲¦ اختر السلعة (يجب أن يتوافق 
        سعر السلعة مع نقاطك💰) 
📬 ¦ في حال واجهتك مشكلة في جمع النقاط تواصل مع المطور ليقوم باعطائك نقاط بسعر رمزي",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"3 ¦ الخطوة الثالثة",'callback_data'=>"k3"],['text'=>"👩‍💻 ¦ المطور",'url'=>"http://t.me/$alm"]],
[['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 	   ])	  ]);	 }
if($data == "k3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🤖 ¦ البوت يقوم بتسليم السلعة تلقائيا\n\n♾ ¦ لا تحتاج الإنتظار حتى يتم تسليم سلعتك\n\n🔰 ¦ بمجرد الضغط على شراء السلعة يتم ارسالها\n\n📛 ¦ في حال واجهتك مشكلة تواصل مع المطور",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💰 ¦ لا أستطيع جمع النقاط",'callback_data'=>"k4"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 	   ])	  ]);	 }
if($data == "k4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🍃 ¦ إذا لا تستطيع جمع النقاط يمكنك شراؤها...💸",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💸 ¦ شراء نقاط",'callback_data'=>"buy"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ]    ])	  ]);	 }
    if($data == "refccoinn"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📛 ¦ أولاً وجب التنبيه ان أي شخص يتعرض للأحتيال من خلال بيع وشراء النقاط في البوت سيتحمل فقدانها بنفسه ولن يكون هناك تعويض اذا تم الاحتيال عليك ✅👍🏻
تذكر يمكنك شراء النقاط من مبرمج البوت بدلاً من اطراف خارجيه غير معروفة لضمان حقك 👍🏻",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"☑️ ¦ لأ بأس انا اتحمل مسؤولية",'callback_data'=>"refccoin"],['text'=>"💸 ¦ شراء نقاط",'callback_data'=>"buy"]],[['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ]    ])	  ]);	 }
if($data == "nqq"&& $sales[$chat_id]['collect']>=1){
bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"هل تريد تصفير نقاطك؟ 🗑️\n لا يمكنك استرجاع نقاط بعد حذفها رجاءً انتبه ‼️" ,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>'نعم - أنا متأكد ✅ ','callback_data'=>'slff'],['text'=>'لا - إلغاء ❎ ','callback_data'=>'back']], 
    ]    ])   ]); 
} elseif($data== "nqq" &&$sales[$chat_id]['collect']<"1") {
bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"عذراً نقاطك غير كافية❗",
      'show_alert'=>true
     ]); }
              if($data == 'slff'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم تصفير نقاطك بنجاح ✔️ ',
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>' القائمة الرئيسية 🔙 ','callback_data'=>'back']], 
    ]     ])   ]); 
$sales[$chat_id]['collect'] = 0;
   save($sales); }
if($data == "col"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔬 ¦ أختار أحد من خيارات التالية",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
   [['text'=>"🖇️ ¦ رابط الدعوة",'callback_data'=>"ra1"],['text'=>"🎁 ¦ هدية يومية",'callback_data'=>"kk"]],
   [['text'=>"🔄 ¦ تحويل نقاط",'callback_data'=>"refccoinn"],['text'=>"📡 ¦ اشتراك في القنوات",'callback_data'=>"chs"]],
   [['text'=>"💸 ¦ شراء نقاط ",'url'=>"http://t.me/$alm"]],
   [['text'=>"رجوع 🔙",'callback_data'=>"back"]],
    ]    ])	  ]);	
          bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"💰 تجميع نقاط 💰",
     ]); }
         if($data == "tll"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"$tlll",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"back"]],
]	])	]);
  bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"📮 تعليمات البوت 📮",     ]); 
	$sttings["rmm"]+=1;
file_put_contents("tall3.json",json_encode($sttings));
}
 if($data == 'ra1'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"\n👋🏻 ¦ هلا بك عزيزي $nammee مجدداً\n😁 ¦ إليك الرابط الخاص بك
https://t.me/$me?start=$chat_id
ستربح نقطة عندما يدخل احد لرابط إحالتك 😉\n📛 ¦ ملاحظة : اذا لم يشترك صديقك بقناة البوت لن تربح 😌\nإذا كان الأمر صعب 🤕 \n\nيمكنك شراء نقاط من مطوري $ 👩🏻‍💻 \n\n📞 ¦ للتواصل
« @$alm »",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" مشاركة الرابط 🌐",'switch_inline_query'=>"#$chat_id"],['text'=>"انشاء إعلان 📝",'callback_data'=>"SK"]],
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
    ] 	   ])	  ]);	 }
  $inlinequery = $update->inline_query->query;
$inlineID = $update->inline_query->from->id;
if($inlinequery == "#$inlineID" ){
    bot('answerInlineQuery',[
    'inline_query_id'=>$update->inline_query->id,    
    'cache_time'=>'300',
    'results' => json_encode([[
    'type'=>'article',
    'id'=>base64_encode(rand(5,555)),
    'title'=>'- إضغط هنا للمشاركة ألرابط 🔊',
    'thumb_url'=>"https://j.top4top.io/p_18915naq80.jpg",
    'description'=>"سيتم آرسال الرابط تلقائي 
ويتم تجميع النقاط تلقائي ايضاً..📲",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'message_text'=>"هل تريد أرقام وتطبيقات وملفات والخ...
كل هاذا في بوت ماركت العالمي مجاناً {تسليم تلقائي}🆓🔥"],
    'reply_markup'=>['inline_keyboard'=>[
    [['text'=>"دخول للبوت 🤖",'url'=>"https://t.me/$me?start=$inlineID"]]
    ]]	    ]])	    ]);	    }
 if($data == "SK"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"👋🏻  - اهلا بك في بوت الماركت العالمي\n📜  - قم بالدخول للبوت واتبع التعليمات فقط 👌\n\n🛒  - بوت ماركت يقوم بعرض الكثير من الاشياء مقابل نقاط تقوم بتجميعهن 💰\n\n🔰 ويقوم باعطائك 🔰\n- ملفاـــــــات بوتات ناادرة وخدمية 🗂\n- اكواد للمبرمجين قد تفيدهم 📜\n- برامج مدفوعة واللعاب 🕹\n- ارقام جاهزة لتفعيل اي البرامج 📞\n\n#️⃣  - طريقة التسليـــــــم تلقائي دون إنتظار ✔️\n\nاستغل الفرصة واللحق قبل انتهاء الكمية ♻️
ماذا تنتظر👇🏻👇🏻
https://t.me/$me?start=$chat_id",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"ra1"]],
]	])	]);	} 
 elseif(preg_match("/(sales)/",$data)){
 	$ex=explode("#",$data);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الكمية ♾️','callback_data'=>'s'],['text'=>'السعر 💰','callback_data'=>'s'],['text'=>'إسم السلعة 🔖','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if($ex[1]==$sales["sales"][$code]["type"])	{
    $ap=$sales["sales"][$code]["apps"];
  $count=json_decode(file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$API_KEYsim&action=getNumbersStatus&country=$co"),1); 
  $a=$count[$ap."_0"];
  if($a==0){
  $a="♾️";	
  }else{
  	$a="♾️";  } 
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code],['text'=>"$a",'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);  }
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة الخدمات 🔙','callback_data'=>'ktmat']];
  $reply_markup = json_encode($reply_markup);
  bot('editMessageText',[	
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'🔰 ¦ To purchase a Commodity, click on the name of the Commodity you want
🔰 ¦ لشراء سلعة، انقر على اسم السلعة التي تريدها
~ عدد نقاطك الآن: '.$sales[$chat_id]['collect'],
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]['mode'] = null;
   save($sales);
   exit;
 } elseif($data == 'yes'){
  $price = $sales['sales'][$sales[$chat_id]['mode']]['price'];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
$file=$sales['sales'][$sales[$chat_id]['mode']]['file'];
$file2=$sales['sales'][$sales[$chat_id]['mode']]['file2'];
$caption=$sales['sales'][$sales[$chat_id]['Arabshadowso']]['caption'];
$caption1=$sales['sales'][$sales[$chat_id]['Arabshadowso']]['caption1'];
$mah = $sales[$chat_id]['numbercount'];
  bot("EditMessageText",[
  "chat_id"=>$chat_id,
  "text"=>"تم قبول طلبك ☑️
\nجاري تجهيز سلعة الإرسال 😃\nإنتضر ثـ¹ـانـيـة حتى تستلم طلبك 📦",
  "message_id"=>$message_id
  ]);
  if($file2=="text"){
  	bot("sendmessage",[
  "chat_id"=>$chat_id,
  "$file2"=>$file
  ]);
    bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>"📦 « إيـصـآل طـلـب » 📦
شـكـراً لـإ سـتـخـدامـك الـبـ🤖ـوت الـخـاص بـنـا 🤍",
  "message_id"=>$message_id
  ]);
  $sttings["tts"]+=1;
file_put_contents("tall3.json",json_encode($sttings));
  }else{	
bot("send$file2",[
  "chat_id"=>$chat_id,
  "$file2"=>$file,
  "$caption1"=>$caption
  ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📦 « إيـصـآل طـلـب » 📦
شـكـراً لـإ سـتـخـدامـك الـبـ🤖ـوت الـخـاص بـنـا 🤍",   	]);	 
$sttings["tts"]+=1;
file_put_contents("tall3.json",json_encode($sttings));
}
$dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    	bot('sendmessage',[
	'chat_id'=>$sss,
	'text'=>"- تم تسـ📦ـليم طلب جديد ✅
- من ماركت : @$me 🤍

🏷 ¦ السلعة :- *$name* 📱
💰 ¦ السعر :- *$price*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*

- معلومات المُشتري 👤 :-
🏷 ¦ الاسم :- [$nammee](tg://user?id=$chat_id)
🆔 ¦ الأيدي :- $chat_id", 
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				[['text'=>"بوت الماركت 🤖",'url'=>"https://t.me/$me?start"]  ],                     ]               ])		]);
      $rm30 = $sttings["tts"];
  bot('sendmessage',[
   'chat_id'=>$adminn,
   'text'=>"- اسم شخص : $nammee ، 
- ايدي الشخص : $chat_id ، 
-  قم بشراء $name بسعر $price ، 

- تم تسليم السلعة تلقائيا" ]);
  $sales['ame']++;
$mynum=$sales['ame'];
  $sales[$chat_id]['mode'] = null;
  $sales[$chat_id]['collect'] -= $price;
  save($sales);
  exit;
 } else {
   if($data == 's') { exit; }
   $price = $sales['sales'][$data]['price'];
   $name = $sales['sales'][$data]['name'];
   if($price != null){
    if($price <= $sales[$chat_id]['collect']){
     bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"💢 ¦ هل أنت متأكد أنك تريد شراء $name ‼️",
      'reply_markup'=>json_encode([
       'inline_keyboard'=>[
        [['text'=>'نعم - أنا متأكد ✅ ','callback_data'=>'yes'],['text'=>'لا - إلغاء الشراء ❎ ','callback_data'=>'ktmat']]        ] 	      ])	     ]);
     $sales[$chat_id]['mode'] = $data;
     save($sales);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"نقاطك غير كافية لشراء هذا السلعة 🚫
الإسم السلعة : $name 🔖
سعر السلعة : $price نقطة 💰 
عدد نقاطك : ".$sales[$chat_id]['collect']." نقطة 💸
تسليم : تلقائي 📦",
      'show_alert'=>true    ]);	    }	   }	 }
if($message->reply_to_message and $message->chat->id== $admin and $text=="رفع"){
$a= $message->reply_to_message->document->file_id;
$get=bot("getfile",[
"file_id"=>$a
])->result->file_path; 
$v="sales.json";
$file=file_put_contents($v, file_get_contents("https://api.telegram.org/file/bot".API_KEY."/".$get));
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم الرفع"]);	}
if(!$user){
$user = "لا يوجد معرف";
}elseif($user){
$user = "$user";
}
$name = $message->from->first_name;
if($message && !in_array($chat_id,$sales['ids']) && $sales['onn']=="onn"){
$sales['ids'][]=$chat_id;
save($sales);
bot('sendMessage',[
'chat_id'=>$adminn,
'text'=>"٭ تم دخول شخص جديد الى البوت الخاص بك 🕴🏻
                 ◈ ◈ ◈ ◈
• معلومات العضو الجديد ☃

• الاسم :   <a href='tg://user?id=$from_id'>$name</a> 
• المعرف : <a href='tg://user?id=$from_id'>@$user</a> 
• الايدي :  <code>$from_id</code> 
                 ◈ ◈ ◈ ◈
• عدد الاعضاء الكلي : $Members
",'parse_mode'=>'HTML']);
$sales['users']++;
$Users=$sales['users'];
save($sales);}
$d = date('D');
$day = explode("\n",file_get_contents($d.'.txt'));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
$fromid = $update->callback_query->from->id;
  if($data == "kk"){ 
  if(!in_array($fromid,$day)){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"لقد ربحت $htt نقطة 💰
 يمكنك الربح مجدد بعد منتصف الليل 🕛", 
       'show_alert'=>true,
]);
$sales[$fromid]['collect'] += $htt;
save($sales);
file_put_contents($d.'.txt',$fromid."\n",FILE_APPEND);
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
 'text' =>" حاول مجدداً بعد منتصف الليل 🕛 ",
         'show_alert'=>true,
]);
	$sttings["ggl"]+=1;
file_put_contents("tall3.json",json_encode($sttings));
}	}