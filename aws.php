<?php

define('API_KEY',$API_KEY);

function bot($method, $datas = [])
{
    if (function_exists('curl_init')) {
        $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            var_dump(curl_error($ch));
        } else {
            return json_decode($res);
        } # END OF ISSET CURL
    } else {
        $iBadlz = http_build_query($datas);
        $url    = "https://api.telegram.org/bot" . API_KEY . "/" . $method . "?$iBadlz";
        $iBadlz = file_get_contents($url);
        return json_decode($iBadlz);
    } # END OF !CURL EXISTS
}

function Add($path, $content)
{
    $file = fopen("$path", "a") or die("Unable to open file!");
    fwrite($file, "$content");
    fclose($file);
}
function GetUpdates($offset = null, $limit = 1, $timeout = null, $allowed_updates = [])
{
    return bot('getUpdates', [
        'offset' => $offset,
        'limit' => $limit,
        'timeout' => $timeout,
        'allowed_updates' => $allowed_updates
    ]);
}
function SetWebhook($url, $certificate = null, $max_connections = 1, $allowed_updates = [])
{
    return bot('setWebhook', [
        'url' => $url,
        'certificate' => $certificate,
        'max_connections' => $max_connections,
        'allowed_updates' => $allowed_updates,
    ]);
}
function DeleteWebhook()
{
    return bot('deleteWebhook');
}
function GetWebhookInfo()
{
    return bot('getWebhookInfo');
}
function SendChatAction($chat_id, $action)
{
    return bot('sendChatAction', [
        'chat_id' => $chat_id,
        'action' => $action
    ]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function ForwardMessage($chat_id, $from_chat_id, $message_id)
{
    return bot('forwardMessage', [
        'chat_id' => $chat_id,
        'from_chat_id' => $from_chat_id,
        'disable_notification' => false,
        'message_id' => $message_id
    ]);
}
function SendPhoto($chat_id, $photo, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendPhoto', [
        'chat_id' => $chat_id,
        'photo' => $photo,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendAudio($chat_id, $audio, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $performer = null, $title = null, $thumb = null, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendAudio', [
        'chat_id' => $chat_id,
        'audio' => $audio,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'duration' => $duration,
        'performer' => $performer,
        'title' => $title,
        'thumb' => $thumb,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendDocument($chat_id, $document, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendDocument', [
        'chat_id' => $chat_id,
        'document' => $document,
        'thumb' => $thumb,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendVideo($chat_id, $video, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null, $supports_streaming = null)
{
    return bot('sendVideo', [
        'chat_id' => $chat_id,
        'video' => $video,
        'duration' => $duration,
        'width' => $width,
        'height' => $height,
        'thumb' => $thumb,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'supports_streaming' => $supports_streaming,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendAnimation($chat_id, $animation, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendAnimation', [
        'chat_id' => $chat_id,
        'animation' => $animation,
        'duration' => $duration,
        'width' => $width,
        'height' => $height,
        'thumb' => $thumb,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendVoice($chat_id, $voice, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendVoice', [
        'chat_id' => $chat_id,
        'voice' => $voice,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'duration' => $duration,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendVideoNote($chat_id, $video_note, $duration = null, $length = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendVideoNote', [
        'chat_id' => $chat_id,
        'video_note' => $video_note,
        'duration' => $duration,
        'length' => $length,
        'thumb' => $thumb,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendMediaGroup($chat_id, $media, $reply_to_message_id = null)
{
    return bot('sendMediaGroup', [
        'chat_id' => $chat_id,
        'media' => $media,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id
    ]);
}
function SendLocation($chat_id, $latitude, $longitude, $live_period = null, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendLocation', [
        'chat_id' => $chat_id,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'live_period' => $live_period,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendContact($chat_id, $phone_number, $first_name, $last_name = null, $reply_to_message_id = null, $reply_markup = null, $vcard = null)
{
    return bot('sendContact', [
        'chat_id' => $chat_id,
        'phone_number' => $phone_number,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'vcard' => $vcard,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function SendPoll($chat_id, $question, $options, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendPoll', [
        'chat_id' => $chat_id,
        'question' => $question,
        'options' => $options,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function GetUserProfilePhotos($user_id, $offset = null, $limit = null)
{
    return bot('getUserProfilePhotos', [
        'user_id' => $user_id,
        'offset' => $offset,
        'limit' => $limit
    ]);
}
function GetFile($file_id)
{
    return bot('getFile', [
        'file_id' => $file_id
    ]);
}
function File_path($file_path)
{
    $info = file_get_contents("https://api.telegram.org/file/bot" . API_KEY . "/" . $file_path);
    return $info;
}
function KickChatMember($chat_id, $user_id, $until_date = null)
{
    return bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'until_date' => $until_date
    ]);
}
function UnKickChatMember($chat_id, $user_id)
{
    return bot('promoteChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'can_send_messages' => true,
    ]);
}
function PromoteChatMember($chat_id, $user_id)
{
    return bot('promoteChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'can_send_messages' => true,
        'can_delete_messages' => true,
        'can_invite_users' => true,
        'can_restrict_members' => true,
        'can_pin_messages' => true,
    ]);
}
function RestrictChatMember($chat_id, $user_id)
{
    return bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_invite_users' => false,
        'can_send_other_messages' => false,
    ]);
}
function UnRestrictChatMember($chat_id, $user_id)
{
    return bot('promoteChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'can_send_messages' => true,
        'can_send_media_messages' => true,
        'can_send_other_messages' => true,
    ]);
}
function DemoteChatMember($chat_id, $user_id)
{
    return bot('promoteChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'can_change_info' => false,
        'can_post_messages' => false,
        'can_edit_messages' => false,
        'can_delete_messages' => false,
        'can_invite_users' => false,
        'can_restrict_members' => false,
        'can_pin_messages' => false,
        'can_promote_members' => false
    ]);
}
function ExportChatInviteLink($chat_id)
{
    return bot('exportChatInviteLink', [
        'chat_id' => $chat_id
    ]);
}
function SetChatPhoto($chat_id, $photo)
{
    return bot('setChatPhoto', [
        'chat_id' => $chat_id,
        'photo' => $photo
    ]);
}
function DeleteChatPhoto($chat_id)
{
    return bot('deleteChatPhoto', [
        'chat_id' => $chat_id
    ]);
}
function SetChatTitle($chat_id, $title)
{
    return bot('setChatTitle', [
        'chat_id' => $chat_id,
        'title' => $title
    ]);
}
function SetChatDescription($chat_id, $description)
{
    return bot('setChatDescription', [
        'chat_id' => $chat_id,
        'description' => $description
    ]);
}
function PinChatMessage($chat_id, $message_id)
{
    return bot('pinChatMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'disable_notification' => false
    ]);
}
function UnpinChatMessage($chat_id)
{
    return bot('unpinChatMessage', [
        'chat_id' => $chat_id,
    ]);
}
function LeaveChat($chat_id)
{
    return bot('LeaveChat', [
        'chat_id' => $chat_id
    ]);
}
function GetChat($chat_id)
{
    return bot('getChat', [
        'chat_id' => $chat_id
    ]);
}
function GetChatAdministrators($chat_id)
{
    return bot('getChatAdministrators', [
        'chat_id' => $chat_id
    ]);
}
function GetChatMembersCount($chat_id)
{
    return bot('getChatMembersCount', [
        'chat_id' => $chat_id
    ]);
}
function GetChatMember($chat_id, $user_id)
{
    return bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $user_id
    ]);
}
function AnswerCallbackQuery($callback_query_id, $text, $show_alert = false, $url = null, $cache_time = 0)
{
    return bot('answerCallbackQuery', [
        'callback_query_id' => $callback_query_id,
        'text' => $text,
        'show_alert' => $show_alert,
        'url' => $url,
        'cache_time' => $cache_time
    ]);
}
function EditMessageText($chat_id, $message_id, $text, $inline_message_id = null, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_markup = null)
{
    return bot('editMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'inline_message_id' => $inline_message_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $reply_markup
    ]);
}
function EditMessageCaption($chat_id, $message_id, $caption, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
    return bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'inline_message_id' => $inline_message_id,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'reply_markup' => $reply_markup
    ]);
}
function EditMessageMedia($chat_id, $message_id, $media, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
    return bot('editMessageMedia', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'inline_message_id' => $inline_message_id,
        'media' => $media,
        'reply_markup' => $reply_markup
    ]);
}
function EditMessageReplyMarkup($chat_id, $message_id, $reply_markup, $inline_message_id = null)
{
    return bot('editMessageReplyMarkup', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'inline_message_id' => $inline_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function StopPoll($chat_id, $message_id, $reply_markup = null)
{
    return bot('stopPoll', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'reply_markup' => $reply_markup
    ]);
}
function DeleteMessage($chat_id, $message_id)
{
    return bot('deletemessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id
    ]);
}
function SendSticker($chat_id, $sticker, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendSticker', [
        'chat_id' => $chat_id,
        'sticker' => $sticker,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function AnswerInlineQuery($inline_query_id, $results, $cache_time = 0, $is_personal = false, $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null)
{
    return bot('answerInlineQuery', [
        'inline_query_id' => $inline_query_id,
        'results' => $results,
        'cache_time' => $cache_time,
        'is_personal' => $is_personal,
        'next_offset' => $next_offset,
        'switch_pm_text' => $switch_pm_text,
        'switch_pm_parameter' => $switch_pm_parameter
    ]);
}
function SendGame($chat_id, $game_short_name, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendGame', [
        'chat_id' => $chat_id,
        'game_short_name' => $game_short_name,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
function GetMe()
{
    return bot('getMe');
}
function newAPI_KEY($API_KEY)
{
    $info = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getMe"), True);
    return $info;
}

function zhrfa($text, $num, $smiles)
{
    $info = json_decode(file_get_contents("https://mohammed-api.com/API/zhrfa.php?zhrfa=" . urlencode($text) . "&num=$num&smile=$smiles"), True);
    return $info;
}

function broadcast($Info, $index, $caption)
{
    $Info["index"][0] = $index;
    file_put_contents("Users/info.json", json_encode($Info));
    if ($GLOBALS['text']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "text";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['text'];
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendMessage($Info["$index"][$i], $GLOBALS['text'], "MARKDOWN", true);
        }
    }
    if ($GLOBALS['photo']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "photo";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['photo_file_id'];
        $Info["caption"][0] = "$caption";
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendPhoto($Info["$index"][$i], $GLOBALS['photo_file_id'], $caption, "MARKDOWN");
        }
    }
    if ($GLOBALS['video']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "video";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['video_file_id'];
        $Info["caption"][0] = "$caption";
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendVideo($Info["$index"][$i], $GLOBALS['video_file_id'], null, null, null, null, $caption, "MARKDOWN");
        }
    }
    if ($GLOBALS['video_note']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "video_note";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['video_note_file_id'];
        $Info["caption"][0] = "$caption";
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendVideoNote($Info["$index"][$i], $GLOBALS['video_note_file_id'], null, null, null, null, null, $caption, "MARKDOWN");
        }
    }
    if ($GLOBALS['audio']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "audio";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['audio_file_id'];
        $Info["caption"][0] = "$caption";
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendAudio($Info["$index"][$i], $GLOBALS['audio_file_id'], $caption, "MARKDOWN");
        }
    }
    if ($GLOBALS['voice']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "voice";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['voice_file_id'];
        $Info["caption"][0] = "$caption";
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendVoice($Info["$index"][$i], $GLOBALS['voicer_file_id'], $caption, "MARKDOWN");
        }
    }
    if ($GLOBALS['sticker']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "sticker";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['sticker_file_id'];
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            SendSticker($Info["$index"][$i], $GLOBALS['sticker_file_id']);
        }
    }
    file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}

function forward($Info, $index)
{
    $Info["index"][0] = $index;
    file_put_contents("Users/info.json", json_encode($Info));
    if ($GLOBALS['forward'] || $GLOBALS['chat_forward']) {
        $x = 30;
        $Info["counter"][0] = $x;
        $Info["type"][0] = "forward";
        $Info["sender"][0] = $GLOBALS['from_id'];
        $Info["msg"][0] = $GLOBALS['message_id'];
        file_put_contents("Users/info.json", json_encode($Info));
        for ($i = 0; $i <= $x; $i++) {
            ForwardMessage($Info["$index"][$i], $GLOBALS['chat_id'], $GLOBALS['message_id']);
        }
    }
    file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}

function myheaders($Info, $msg, $index, $caption = null)
{
    if (isset($Info["counter"][0])) {
        $x = $Info["counter"][0] + 30;
        if ($x - 30 > count($Info["$index"])) {
            echo "done!";
            SendMessage($Info["sender"][0], "- تم اتمام عمليه الارسال", "MARKDOWN", true);
            unset($Info["counter"][0]);
            unset($Info["index"][0]);
            unset($Info["type"][0]);
            unset($Info["sender"][0]);
            unset($Info["msg"][0]);
            unset($Info["caption"][0]);
            file_put_contents("Users/info.json", json_encode($Info));
            exit;
        } elseif ($Info["type"][0] == "text") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendMessage($Info["$index"][$i], $msg, "MARKDOWN", true);
            }
        } elseif ($Info["type"][0] == "photo") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendPhoto($Info["$index"][$i], $msg, $caption, "MARKDOWN");
            }
        } elseif ($Info["type"][0] == "video") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendVideo($Info["$index"][$i], $msg, null, null, null, null, $caption, "MARKDOWN");
            }
        } elseif ($Info["type"][0] == "video_note") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendVideoNote($Info["$index"][$i], $msg, null, null, null, null, null, $caption, "MARKDOWN");
            }
        } elseif ($Info["type"][0] == "audio") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendAudio($Info["$index"][$i], $msg, $caption, "MARKDOWN");
            }
        } elseif ($Info["type"][0] == "voice") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendVoice($Info["$index"][$i], $msg, $caption, "MARKDOWN");
            }
        } elseif ($Info["type"][0] == "sticker") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                SendSticker($Info["$index"][$i], $msg);
            }
        }
        $Info["counter"][0] = $x;
        file_put_contents("Users/info.json", json_encode($Info));
        header("Refresh:2");
        echo "sending to ..." . $Info["counter"][0];
        file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
    }
}

function myheaders_forward($Info, $chat_id, $message_id, $index)
{
    if (isset($Info["counter"][0])) {
        $x = $Info["counter"][0] + 30;
        if ($x - 30 > count($Info["$index"])) {
            echo "done!";
            SendMessage($Info["sender"][0], "- تم اتمام عمليه الارسال", "MARKDOWN", true);
            unset($Info["type"][0]);
            unset($Info["counter"][0]);
            unset($Info["msg"][0]);
            unset($Info["sender"][0]);
            unset($Info["index"][0]);
            file_put_contents("Users/info.json", json_encode($Info));
            exit;
        } elseif ($Info["type"][0] == "forward") {
            for ($i = $Info["counter"][0]; $i <= $x; $i++) {
                ForwardMessage($Info["$index"][$i], $chat_id, $message_id);
            }
        }
        $Info["counter"][0] = $x;
        file_put_contents("Users/info.json", json_encode($Info));
        header("Refresh:2");
        echo "sending to ..." . $Info["counter"][0];
    }
    file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}


function myZip($myZip1, $myZip2)
{
    $myZip4 = realpath($myZip1);
    $myZip = new ZipArchive();
    $myZip->open($myZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
    $myZip3 = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($myZip4),
        RecursiveIteratorIterator::LEAVES_ONLY
    );
    foreach ($myZip3 as $myZip5 => $myZip6) {
        if (!$myZip6->isDir()) {
            $myZip7 = $myZip6->getRealPath();
            $myZip8 = substr($myZip7, strlen($myZip4) + 1);
            $myZip->addFile($myZip7, $myZip8);
        }
    }
    $myZip->close();
}

function myZip1($myZip9, $myZip10 = 2)
{
    $myZip11 = array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
    $myZip12 = floor((strlen($myZip9) - 1) / 3);
    return sprintf("%.{$myZip10}f", $myZip9 / pow(1024, $myZip12)) . @$myZip11[$myZip12];
}

$bot = GetMe()->result;
$botid = $bot->id;
$botname = $bot->first_name;
$botusername = $bot->username;




$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;

$message_id = $message->message_id;
$text           = $message->text;

$chat_id    = $message->chat->id;
$from_id     = $message->from->id;

$data = $update->callback_query->data;

$chatid       = $update->callback_query->message->chat->id;
$data_from_id = $update->callback_query->message->reply_to_message->from->id;
$messageid    = $update->callback_query->message->message_id;
$fromid       = $update->callback_query->from->id;
$data_name    = $update->callback_query->from->first_name;
$datatag_name = "[$data_name](tg://user?id=$fromid";

$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;


$reply              = $message->reply_to_message;
$reply_id           = $message->reply_to_message->from->id;
$reply_user         = $message->reply_to_message->from->username;
$reply_message_id   = $message->reply_to_message->message_id;

$forward          = $message->forward_from;
$forward_id       = $forward->id;
$forward_username = $forward->username;

$chat_forward          = $message->forward_from_chat;
$chat_forward_id       = $chat_forward->id;
$chat_forward_username = $chat_forward->username;
$chat_forward_title    = $chat_forward->title;
$chat_forward_type     = $chat_forward->type;

$edit = $update->edited_message;
$edit_from_id = $update->edited_message->from->id;
$edit_chat = $update->edited_message->chat->id;
$edit_message_id = $update->edited_message->message_id;


$sudoiD      = [5539142769,5539142769];
$sudoUser =  ["Arabshadows","Arabshadows"];


$username = $message->from->username;

if (!$username) {
    $username = "لٱيوجد معرف";
} else {
    $username = $username;
}
#$e_x = explode("/",$text);
#if(strpos($e_x ,"/") !== false ) {
#$text = str_replace("@$botusername",null,$text);
#}

$type       = $message->chat->type;

$private = $type == "private";
$supergroup = $type == "supergroup";

$group_title    = $message->chat->title;

$name = $message->from->first_name;
$name_tag = "[$name](tg://user?id=$from_id)";
$name_reply = $message->reply_to_message->from->first_name;
$name_tag_reply =  "[$name_reply](tg://user?id=$reply_id)";
$name_edit = $update->edited_message->from->first_name;
$name_tag_edit =  "[$name_edit](tg://user?id=$edit_from_id)";

$audio      = $message->audio;
$audio_file_id      = $message->audio->file_id;

$video      = $message->video;
$video_file_id      = $message->video->file_id;

$voice = $message->voice;
$voice_file_id = $message->voice->file_id;

$photo = $message->photo;
$photo_file_id = $message->photo[0]->file_id;

$sticker    = $message->sticker;
$sticker_file_id    = $message->sticker->file_id;

$contact = $message->contact;
$contact_number = $message->contact->phone_number;
$contact_name = $message->contact->first_name;

$video_note = $message->video_note;
$video_note_file_id = $message->video_note->file_id;

$document = $message->document;
$document_name = $document->file_name;
$document_file_id = $document->file_id;

$gif = $message->animation;
$gif_file_id = $message->animation->file_id;

$pin = $message->pinned_message;
$pin_id = $message->pinned_message->from->id;
$pin_first_name = $message->pinned_message->from->first_name;
$pin_tag = "[$pin_first_name](tg://user?id=$pin_id)";

$forward = $message->forward_from;
$inline = $message->reply_markup->inline_keyboard;
$entities = $message->entities;


$location   = $message->location;
$location_file_id   = $message->location->file_id;

$new_chat        = $message->new_chat_member;
$left_chat         = $message->left_chat_member;
$new_id            = $new_chat->id;
$left_id              = $left_chat->id;
$left_name              = $left_chat->first_name;

$getbots = GetChatMember($chat_id, $new_id)->result->user->is_bot;

$Info     = json_decode(file_get_contents("Users/info.json"), true);
$status   = json_decode(file_get_contents("Users/status.json"), true);
$lock     = json_decode(file_get_contents("Users/lock.json"), true);
$msgs     = json_decode(file_get_contents("Users/gamemsgs.json"), true);
$game     = json_decode(file_get_contents("Users/gamemsgs.json"), true);
$replies  = json_decode(file_get_contents("Users/replies.json"), true);
$Orders  = json_decode(file_get_contents("Users/orders.json"), true);
$Members  = count($Info['infoId']);
$Groups   = count($Info['infoChat']);
$mymsgs   = $msgs['msgs'][$chat_id][$from_id];
$myedited = $msgs['edit'][$chat_id][$from_id];
$mycoin   = $game['game'][$chat_id][$from_id];

# خزن دربالك تتقرب ...

if (!is_dir("Users")) {
    mkdir("Users");
}

if ($private && !in_array($from_id, $Info["infoId"])) :
    $Info['infoId'][] = "$from_id";
    file_put_contents("Users/info.json", json_encode($Info));
endif;
if ($supergroup && !in_array($chat_id, $Info["infoChat"])) :
    $Info['infoChat'][] = "$chat_id";
    file_put_contents("Users/info.json", json_encode($Info));
endif;

$BotAdmin = GetChatMember($chat_id, $botid);
$array = json_decode(json_encode($BotAdmin), True);
$is_Admin = $array['result']['status'] == "administrator";


if ($message && !in_array($from_id, $sudoiD)) {
    $inf = "";
    for ($i = 0; $i <= count($Info["channel"]); $i++) {
        $channels = $Info["channel"][$i];
        $link = $Info["channel_links"][$i];
        $chat = GetChatMember($channels, $from_id);
        $array = json_decode(json_encode($chat), True);
        $left = $array['result']['status'] == "left";
        if ($left) {
            $getchat = GetChat($channels);
            $arrays = json_decode(json_encode($getchat), True);
            $chat_title = $arrays["result"]["title"];
            $inf = $inf . "[◈︙$chat_title]($link)   \n\n";
        }
    }
    if ($inf != null) {
        SendMessage($chat_id, "اهلا بك عزيزي عليك الاشتراك في قنوات البوت وبعدها ارسل [ $text ]\nرابط القناة : [◈︙𝙰𝚁𝙰𝙱 𝚂𝙷𝙰𝙳𝙾𝚆𝚂 📂](https://t.me/ArabShadows)","MARKDOWN", true);
        exit("subsicribe");
    }
}

# تعين المطور من يدز رساله
if ($message) {
    if (in_array($from_id, $sudoiD)) :
        $GetChatMember = "المطور الاساسي";
    endif;
}

# تعين المطور من يدوس كيبورد 

if ($data) {
    if (in_array($fromid, $sudoiD)) :
        $GetChatMember = "المطور الاساسي";
    endif;
}

# تعين المطور من يعدل رساله 

if ($edit) {
    if (in_array($edit_from_id, $sudoiD)) :
        $GetChatMember = "المطور الاساسي";
    endif;
}

# Here will be sudo orders in private chat..

# تسوي اراي بيها بس المطور وتسوي شروط عليها من خلال متغير 
# $GetChatMember 

$sudo_private = [
    "المطور الاساسي",
];

# هنا تحط عمليه in_array حته تعرف هل الشخص مطور اساسي لولا ؟

$the_sudo = in_array($GetChatMember, $sudo_private);

# هنا تكله اذا جان مطور اساسي دزله كيبورده

if ($GetChatMember == "المطور الاساسي") {
    $private_markup = json_encode(['inline_keyboard' => [
        [['text' => "📊 ¦ عدد المشتركين", 'callback_data' => "info"]],
        [['text' => "🗣️ ¦ اذاعه للمطورين", 'callback_data' => "broadcast"], ['text' => "🧸 ¦ اذاعة عام", 'callback_data' => "broadcast_everyone"]],
        [['text' => "🚸 ¦ تغير كليشة start", 'callback_data' => "start"], ['text' => "🔄 ¦ اذاعة عام بالتوجيه", 'callback_data' => "broadcast_forward_everyone"]],
        [['text' => "🎙️ ¦ اذاعة خاص", 'callback_data' => "broadcast"], ['text' => "🔄 ¦ اذاعة خاص بالتوجيه", 'callback_data' => "broadcast_forward"]],
        [['text' => "🧹 ¦ تصفية الاعضاء", 'callback_data' => "filter_member"], ['text' => "🧹 ¦  تصفيّه المجموعات ", 'callback_data' => "filter_group"]],
        [['text' => "📡 ¦ اضف قناة اشتراك", 'callback_data' => "addch"], ['text' => "🗑️ ¦ حذف قناة اشتراك", 'callback_data' => "delch"]],
        [['text' => "👁️ ¦ عرض القنوات", 'callback_data' => "chs"], ['text' => "🧹 ¦ مسح القنوات", 'callback_data' => "delchs"]],
        [['text' => "📦 ¦ نسخه إحتياطية", 'callback_data' => "getfile"], ['text' => "📤 ¦ رفع النسخه", 'callback_data' => "uploadfile"]],
        [['text' => "🗑️ ¦ حذف الإعدادات", 'callback_data' => "reset"]],
        [['text' => "👩🏻‍💻 ¦ مطور البوت", 'url' => "t.me/$sudoUser[0]"]],
    ]]);

    # هنا تكله اذا جان مطور البوت دزله كيبورده

} elseif ($GetChatMember == "مطور البوت") {
    $private_markup = json_encode(['inline_keyboard' => [
        [['text' => "🎙️ ¦ اذاعة خاص", 'callback_data' => "broadcast"], ['text' => "🧸 ¦ اذاعة عام", 'callback_data' => "broadcast_everyone"]],
        [['text' => "🔄 ¦ اذاعة خاص بالتوجيه", 'callback_data' => "broadcast_forward"], ['text' => "🔄 ¦ اذاعة عام بالتوجيه", 'callback_data' => "broadcast_forward_everyone"]],
        [['text' => "🧹 ¦ تصفية الاعضاء", 'callback_data' => "filter_member"], ['text' => "🧹 ¦  تصفيّه المجموعات ", 'callback_data' => "filter_group"]],
        [['text' => "📡 ¦ اضف قناة اشتراك", 'callback_data' => "addch"], ['text' => "🗑️ ¦ حذف الاشتراك الاجباري", 'callback_data' => "delch"]],
        [['text' => "🚸 ¦ تغير كليشة start", 'callback_data' => "start"], ['text' => "📊 ¦ عدد المشتركين", 'callback_data' => "info"]],
        [['text' => "🗣️ ¦ اذاعه للمطورين", 'callback_data' => "broadcast_dev"]],
    ]]);
}
$back_markup = json_encode(['inline_keyboard' => [
    [['text' => "رجوع 🔙", 'callback_data' => "back"]],
]]);

# هنا تكله اذا جانت الرساله بس بخاص لبوت 
# لاحظ متغير $private اعلى

if ($private) {

    if ($the_sudo == true) {
        if ($text == "/start") {
            $inf = "👋🏻 ¦ أهلا بك يا $name_tag يمكنك هناً التحكم بجميع الاوامر الخاصة بك.";
            SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $private_markup);
        }
    } elseif ($the_sudo == false) {
        } elseif ($text == "/start" && isset($Info["start"][0])) {
            $inf = $Info["start"][0];
            SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
        }
    }# end of private . 

# هنا نهيت الخاص لان تواجه بي مشاكل اذا بقيته ويه الكيبورد
# بعد متحتاجه من سدزلك الكيبورد خاص

# هنا تبدي بعد اوامر الخاص بكيفك تتحكم بيها ارجع

if ($GetChatMember == "المطور الاساسي") {

    $basefile = $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];

    # the cancel . 
    $cancel = $text == "الغاء" || $text == "/cancel";
    if ($cancel) {
        $inf = "- تم حدوث امر الغاء ، بواسطه : $name_tag .";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
        foreach (glob('Users/*.txt') as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }

    if ($data == "start") {
        file_put_contents("Users/start$chatid.txt", $chatid);
        $base = $Info["start"][0];
        $inf = "- ارسل الكليشه الجديده\nملاحظه : تدعم الماركداون!\nمن خلال استخدام الاهاشتاكات التاليه :

1. `#username` : لوضع اسم مستخدم الشخص مع اضافه @
2. `#name` : لوضع اسم الشخص
3. `#id` : لوضع ايدي الشخص 
4. `#points` : لوضع عدد نقاط الشخص\nرساله ستارت الحاليه:\n$base";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if ($text && file_get_contents("Users/start$chat_id.txt") == $chat_id) {
        $Info["start"][0] = "$text";
        file_put_contents("Users/info.json", json_encode($Info));
        $inf = "لقد تم تغير كليشه ستارت بنجاح";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $private_markup);
        if (file_exists("Users/start$chat_id.txt")) : unlink("Users/start$chat_id.txt");
        endif;
    }

    # chs
    if ($data == "chs") {
        $inf = "";
        $count = count($Info["channel"]);
        for ($i = 0; $i <= $count - 1; $i++) {
            $channels = $Info["channel"][$i];
            $link = $Info["channel_links"][$i];
            $getchat = GetChat($channels);
            $arrays = json_decode(json_encode($getchat), True);
            $chat_title = $arrays["result"]["title"];
            $inf = $inf . "*◈︙* [$chat_title]($link)\n"

                . json_encode($Info["channel_links"], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        if ($inf != null) {
            SendMessage($chatid, "عدد القنوات : *$count*\nالقنوات :\n" . $inf, "MARKDOWN", true, $messageid, $back_markup);
        } else {
            SendMessage($chatid, "لاتوجد لديك قنوات\n" . json_encode($Info["channel_links"], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), "MARKDOWN", true, $messageid, $back_markup);
        }
    }
    # delchs

    if ($data == "delchs") {
        $count = count($Info["channel"]);
        if ($Info["channel"] != null) {
            SendMessage($chatid, "عدد القنوات : *$count*\nتم عمل مسح للقنوات .", "MARKDOWN", true, $messageid, $back_markup);
        } else {
            SendMessage($chatid, "لاتوجد لديك قنوات", "MARKDOWN", true, $messageid, $back_markup);
        }

        unset($Info["channel"]);
        unset($Info["channel_links"]);
        file_put_contents("Users/info.json", json_encode($Info));
    }
    if ($data == "addch") {
        file_put_contents("Users/addch$chatid.txt", $chatid);
        $inf = "- الرجاء ارسل معرف او ايدي القناة او قم بعمل توجيه منها.";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/$from_id-$chat_id.txt") == "addmylink") {
        if (preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/', $text)) {
            $Info['channel_links'][] = "$text";
            file_put_contents("Users/info.json", json_encode($Info));
            $inf = "- لقد تمت عمليه اضافه قناتك بنجاح , لتفعيل الاشتراك الاجباري يرجى رفعي مشرف في هذا القناة";
            SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $back_markup);
            if (file_exists("Users/$from_id-$chat_id.txt")) : unlink("Users/$from_id-$chat_id.txt");
            endif;
        } else {
            $inf = "- انا اتوقع ان ترسل لي رابط قناتك لانك قمت باضافه قناة ان كنت لاترغب في ذلك اضغط *back*";
            SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $back_markup);
        }
    }

    if (file_get_contents("Users/addch$chat_id.txt") == $chat_id) {
        if ($chat_forward) {
            $text = $chat_forward_id;
            $chat = GetChat($text)->result->id;
            $text = $chat;
        } elseif (preg_match('/^(@)(.*)/s', $text)) {
            $chat = GetChat($text)->result->id;
            $text = $chat;
        } elseif (strlen($text) == 14) {
            $chat = GetChat($text)->result->id;
            $text = $chat;
        }
        if ($chat != null) {
            if (!in_array($text, $Info["channel"])) {
                $Info['channel'][] = "$text";
                file_put_contents("Users/info.json", json_encode($Info));
                $inf = "- الرجاء قم بأرسال رابط قناتك خاصه او عامه";
                SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $back_markup);
                file_put_contents("Users/$from_id-$chat_id.txt", "addmylink");
            } elseif (in_array($text, $Info["channel"])) {
                $Hint = "- القناة مضافه بالفعل";
                SendMessage($chat_id, $Hint, "MARKDOWN", true, $message_id, $back_markup);
            }
        } elseif ($chat == null) {
            $Hint = "*القناة غير موجوده .؟*";
            SendMessage($chat_id, $Hint, "MARKDOWN", true, $message_id, $private_markup);
        }
        if (file_exists("Users/addch$chat_id.txt")) : unlink("Users/addch$chat_id.txt");
        endif;
    }

    if ($data == "delch") {
        file_put_contents("Users/delch$chatid.txt", $chatid);
        $inf = "- الرجاء ارسل معرف او ايدي القناة او قم بعمل توجيه منها.";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }
    if (file_get_contents("Users/delch$chat_id.txt") == $chat_id) {
        if ($chat_forward) {
            $text = $chat_forward_id;
            $chat = GetChat($text)->result->id;
            $text = $chat;
        } elseif (preg_match('/^(@)(.*)/s', $text)) {
            $chat = GetChat($text)->result->id;
            $text = $chat;
        } elseif (strlen($text) == 14) {
            $chat = GetChat($text)->result->id;
            $text = $chat;
        }
        if ($chat != null) {
            if (in_array($text, $Info["channel"])) {
                $XX0BB = array_search($text, $Info["channel"]);
                unset($Info["channel"][$XX0BB]);
                unset($Info["channel_links"][$XX0BB]);
                file_put_contents("Users/info.json", json_encode($Info));
                $inf = "- لقد تمت عمليه حذف قناتك بنجاح .";
                SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $private_markup);
            } elseif (!in_array($text, $Info["channel"])) {
                $Hint = "- القناة غير موجوده في قائمه القنوات";
                SendMessage($chat_id, $Hint, "MARKDOWN", true, $message_id, $private_markup);
            }
        } elseif ($chat == null) {
            $Hint = "*القناة غير موجوده .؟*";
            SendMessage($chat_id, $Hint, "MARKDOWN", true, $message_id, $private_markup);
        }
        if (file_exists("Users/delch$chat_id.txt")) : unlink("Users/delch$chat_id.txt");
        endif;
    }

    # deldevs ...

    if ($data == "deldevs") {
        $formatting = "*- 𓆦 Formatting Devloperments.*\n*هـَ - 𓆦*: يتم حوسبه المصفوفٱت...\n*هـَ - 𓆦*: تم عمل مسح للمطورين... !";
        unset($status['sudo_id']);
        $status["sudo_id"] = array_values($status["sudo_id"]);
        file_put_contents("Users/status.json", json_encode($status));
        unset($status['sudo_tag']);
        $status["sudo_tag"] = array_values($status["sudo_tag"]);
        file_put_contents("Users/status.json", json_encode($status));
        SendMessage($chatid, $formatting, "MARKDOWN", true, null, $private_markup);
    }

    # files ...

    if ($data == "getfile") {
        $myZip14 = "https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']; //مسار استضافتك
        $myZip14 = dirname($myZip14); # مسار المجلد
        date_default_timezone_set("Asia/Baghdad");
        $myZip13 = date("{h-i-s}");
        myZip('Users', "Backup-$myZip13.zip");
        $caption = "Backup. 📦\nToday's date : " . date('Y/m/d') . " 📆\nThe Time is : " . date('h:i A') . " ⏰\nFile size : " . myZip1(filesize("Backup-$myZip13.zip")) . " 🏷";
        foreach (glob('*.zip') as $file) {
            SendDocument($chatid, urldecode("$myZip14/$file"), null, $caption, "MARKDOWN", $messageid);
            unlink($file);
        }
        $inf = "لقد تمت عمليه ارسال النسخ الاحتياطيه بصيغه zip\nالرجاء عند رفع النسخه لبوتك يجب ان تماثل نفس الاسم !";
        EditMessageText($chatid, $messageid, $inf, null, "MARKDOWN", true, $back_markup);
    }
    if ($data == "uploadfile") {
        file_put_contents("Users/uploadfile$chatid.txt", $chatid);
        $inf = "- الرجاء ارسل الملف لرفعه";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/uploadfile$chat_id.txt") == $chat_id) {
        if ($document) {
            $file_name = $document_name == "info.json" || $document_name == "gamemsgs.json" || $document_name == "status.json" || $document_name == "lock.json" || $document_name == "replies.json";
            if ($file_name == true) {
                $getfile = GetFile($document_file_id)->result->file_path;
                $file = File_path($getfile);
                if (file_exists("Users/$document_name")) {
                    unlink("Users/$document_name");
                }
                file_put_contents("Users/$document_name", $file);
                $inf = "*- لقد تمت عمليه رفع ملفك $document_name بنجاح .*";
                SendMessage($chat_id, $inf, "MARKDOWN", true, $messageid, $private_markup);
            } else {
                $Hint = "- اسم الملف الذي تحاول رفعه غير متطابق مع الملفات التي لدينا\nتأكد ان اسم الملف مطابق لهذه الاسماء:\n*{info.json,gamemsgs.json,status.json,lock.json,replies.json}*";
                SendMessage($chat_id, $Hint, "MARKDOWN", true);
            }
        } else {
            $Hint = "Hint::*- الذي تحاول ارساله ليس ملف*";
            SendMessage($chat_id, $Hint, "MARKDOWN", true);
        }
        if (file_exists("Users/uploadfile$chat_id.txt")) : unlink("Users/uploadfile$chat_id.txt");
        endif;
    }

    # new API_KEY... 
    if ($data == "API_KEY") {
        $myurl = file_get_contents("https://mohammed-api.com/Source/newAPI_KEY.txt");
        file_put_contents("newAPI_KEY.php", $myurl);
        $basefile = $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];
        $url = str_replace("Source.php", "newAPI_KEY.php", $basefile);
        $inf = "[اضغط هنا للدخول لعمليه تغير التوكن]($url)\n الرجاء اضغط على رجوع بعد اتمام العمليه \n تحديدا كلمه *back*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    # Transfer ownership
    if ($data == "ownership") {
        file_put_contents("Users/ownership$chatid.txt", $chatid);
        $inf = "- ارسل ايدي المطور الجديد\nملاحظه : لايمكن التراجع عن هذا القرار";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/ownership$chat_id.txt") == $chat_id) {
        if ($text) {
            $chat = GetChat($text)->result->username;
            if ($chat != null) {
                if (file_exists("sudo.php")) {
                    unlink("sudo.php");
                    unlink("username.php");
                }
                file_put_contents("sudo.php", $text);
                file_put_contents("username.php", $chat);
                $inf = "- لقد تمت عمليه تغير المطور لم تعد انت المطور";
                SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $private_markup);
            } elseif ($chat == null) {
                $Hint = "- هذا الايدي خطأ .";
                SendMessage($chat_id, $Hint, "MARKDOWN", true, $message_id);
            }
        } else {
            $Hint = "- يجب ان يكون نوع الكلام رساله";
            SendMessage($chat_id, $Hint, "MARKDOWN", true, $message_id);
        }
        if (file_exists("Users/ownership$chat_id.txt")) : unlink("Users/ownership$chat_id.txt");
        endif;
    }

    # broadcast
    if ($data == "broadcast") {
        file_put_contents("Users/broadcast$chatid.txt", $chatid);
        $inf = "*ارسل اذاعتك للاعضاء في الخاص\n يمكنك ارسال {{رساله , مقطع مرئي , مقطع نوت , اغنيه , تسجيل صوتي , ملصق}}*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/broadcast$chat_id.txt") == $chat_id) {
        if (file_exists("Users/broadcast$chat_id.txt")) : unlink("Users/broadcast$chat_id.txt");
        endif;
        $inf = " : يتم ارسال المحتوى الى *$Members*\n*- الرجاء انتظر انتهاء العمليه*";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
        broadcast($Info, "infoId", $caption);
    }

    # broadcast_forward
    if ($data == "broadcast_forward") {
        file_put_contents("Users/broadcast_forward$chatid.txt", $chatid);
        $inf = "*- قم بعمل توجيه رساله لأرسالها لأعضاء الخاص*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/broadcast_forward$chat_id.txt") == $chat_id) {
        if (file_exists("Users/broadcast_forward$chat_id.txt")) : unlink("Users/broadcast_forward$chat_id.txt");
        endif;
        $inf = " : يتم ارسال المحتوى الى *$Members*\n*- الرجاء انتظر انتهاء العمليه*";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
        forward($Info, "infoId");
    }
    # broadcast_everyone
    if ($data == "broadcast_everyone") {
        file_put_contents("Users/broadcast_everyone$chatid.txt", $chatid);
        $inf = "*ارسل اذاعتك للمجموعات جميعا\n يمكنك ارسال { {رساله , مقطع مرئي , مقطع نوت , اغنيه , تسجيل صوتي , ملصق} }*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }


    if (file_get_contents("Users/broadcast_everyone$chat_id.txt") == $chat_id) {
        if (file_exists("Users/broadcast_everyone$chat_id.txt")) : unlink("Users/broadcast_everyone$chat_id.txt");
        endif;
        $inf = " : يتم ارسال المحتوى الى *$Groups*\n*- الرجاء انتظر انتهاء العمليه*";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
        broadcast($Info, "infoChat", $caption);
    }
    # broadcast_forward_everyone
    if ($data == "broadcast_forward_everyone") {
        file_put_contents("Users/broadcast_forward_everyone$chatid.txt", $chatid);
        $inf = "*- قم بعمل توجيه رساله لأرسالها لجميع المجموعات*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/broadcast_forward_everyone$chat_id.txt") == $chat_id) {
        if (file_exists("Users/broadcast_forward_everyone$chat_id.txt")) : unlink("Users/broadcast_forward_everyone$chat_id.txt");
        endif;
        $inf = " : يتم ارسال المحتوى الى *$Groups*\n*- الرجاء انتظر انتهاء العمليه*";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
        forward($Info, "infoChat");
    }
    # broadcast_dev
    if ($data == "broadcast_dev") {
        file_put_contents("Users/broadcast_dev$chatid.txt", $chatid);
        $inf = "*- قم بعمل بأرسال رساله لأرسالها للمطورين\nيجب ان يكون المطور ارسل /start للبوت او اي رساله*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    if (file_get_contents("Users/broadcast_dev$chat_id.txt") == $chat_id) {
        if (file_exists("Users/broadcast_dev$chat_id.txt")) : unlink("Users/broadcast_dev$chat_id.txt");
        endif;
        # set the members as devs only in here... 
        $Members = count($status["sudo_id"]);
        $inf = " :لقد تم ارسال المحتوى الى *$Members* مطور \n*يجب ان يكون المطور ارسل \start للبوت .*";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $back_markup);
        if ($text) {
            SendMessage($sudoiD, $text, "MARKDOWN", true);
            for ($i = 0; $i <= $Members; $i++) {
                SendMessage($status["sudo_id"][$i], $text, "MARKDOWN", true);
            }
        }
        if ($video) {
            SendMessage($sudoiD, $text, "MARKDOWN", true);
            for ($i = 0; $i <= $Members; $i++) {
                SendVideo($status["sudo_id"][$i], $video_file_id, null, null, null, null, $message->caption, "MARKDOWN");
            }
        }
        if ($video_note) {
            SendMessage($sudoiD, $text, "MARKDOWN", true);
            for ($i = 0; $i <= $Members; $i++) {
                SendVideoNote($status["sudo_id"][$i], $video_note_file_id, null, null, null, null, null, $message->caption, "MARKDOWN");
            }
        }
        if ($audio) {
            SendMessage($sudoiD, $text, "MARKDOWN", true);
            for ($i = 0; $i <= $Members; $i++) {
                SendAudio($status["sudo_id"][$i], $audio_file_id, $message->caption, "MARKDOWN");
            }
        }
        if ($voice) {
            SendMessage($sudoiD, $text, "MARKDOWN", true);
            for ($i = 0; $i <= $Members; $i++) {
                SendVoice($status["sudo_id"][$i], $voice_file_id, $message->caption, "MARKDOWN");
            }
        }
        if ($sticker) {
            SendMessage($sudoiD, $text, "MARKDOWN", true);
            for ($i = 0; $i <= $Members; $i++) {
                SendSticker($status["sudo_id"][$i], $sticker_file_id);
            }
        }
    }

    # filter_member
    if ($data == "filter_member") {
        $inf = "*- يقوم البوت الان بعمل تصفيه للاعضاء عند الانتهاء سيتم تبليغك بذلك .*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
        foreach ($Info['infoId'] as $memberid) {
            $action = SendChatAction($memberid, "typing")->ok;
            if ($action != true) {
                $XX0BB = array_search($memberid, $Info['infoId']);
                unset($Info['infoId'][$XX0BB]);
                $Info['infoId'] = array_values($Info['infoId']);
                file_put_contents("Users/info.json", json_encode($Info));
            }
        }
        $inf = "*- تمت عمليه تصفيه الاعضاء الحساباتهم محذوفه او من حظر البوت .*";
        SendMessage($chatid, $inf, "MARKDOWN", true, $messageid, $private_markup);
    }

    # filter_member
    if ($data == "filter_group") {
        $inf = "*- يقوم البوت الان بعمل تصفيه للمجموعات عند الانتهاء سيتم تبليغك بذلك .*";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
        foreach ($Info['infoChat'] as $groupid) {
            $action = SendChatAction($groupid, "typing")->ok;
            if ($action != true) {
                $XX0BB = array_search($groupid, $Info['infoChat']);
                unset($Info['infoChat'][$XX0BB]);
                $Info['infoChat'] = array_values($Info['infoChat']);
                file_put_contents("Users/info.json", json_encode($Info));
            }
        }
        $inf = "*- تمت عمليه تصفيه المجموعات المحذوفه او من المجموعات التي حظرت البوت .*";
        SendMessage($chatid, $inf, "MARKDOWN", true, $messageid, $private_markup);
    }
    # info
    $Members  = count($Info['infoId']);
    $Groups   = count($Info['infoChat']);

    if ($data == "info") {
        $inf = "- اليكّ المعلومات العامه حول عدد الاعضاء :\n- *عدد المجموعات ⋉ $Groups ⋊*\n- *عدد الاعضاء ⋉ $Members ⋊* .";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }
    if ($text == "المجموعات" || $text == "الاعضاء" || $text == "/gpss") {
        $inf = "- اليكّ المعلومات العامه حول عدد الاعضاء :\n- *عدد المجموعات ⋉ $Groups ⋊*\n- *عدد الاعضاء ⋉ $Members ⋊* .";
        SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id);
    }
    # reset settings 
    if ($data == "reset") {
        foreach (glob('Users/*.txt') as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
        $inf = "- لقد تمت عمليه العوده للاعدادات الطبيعيه الخاصه بالبوت .";
        SendMessage($chatid, $inf, "MARKDOWN", true, null, $back_markup);
    }

    # back 
    if ($data == "back") {
        if (file_exists("newAPI_KEY.php")) : unlink("newAPI_KEY.php");
        endif;
        foreach (glob('Users/*.txt') as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
        $inf = "- اهلا بك مجدداً عزيزي ، $GetChatMember !ツ\n*- تمت عمليه العوده بنجاح ، لقد تم الغاء اي امر قمت به حالاً ✔️.*";
        EditMessageText($chatid, $messageid, $inf, null, "MARKDOWN", true, $private_markup);
    }
} #end of the_sudo . 


#$photo_file_id,$video_file_id,$video_note_file_id,$audio_file_id,$voice_file_id,$sticker_file_id

# هنا عينت اذاعه الهيدرز لاتلعب بيها بليز 
if (!$update) {
    if ($Info["type"][0] == "text") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0]);
    }
    if ($Info["type"][0] == "photo") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0], $Info["caption"][0]);
    }
    if ($Info["type"][0] == "video") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0], $Info["caption"][0]);
    }
    if ($Info["type"][0] == "video_note") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0], $Info["caption"][0]);
    }
    if ($Info["type"][0] == "audio") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0], $Info["caption"][0]);
    }
    if ($Info["type"][0] == "voice") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0], $Info["caption"][0]);
    }
    if ($Info["type"][0] == "sticker") {
        myheaders($Info, $Info["msg"][0], $Info["index"][0]);
    }

    # forward ... 

    if ($Info["type"][0] == "forward") {
        myheaders_forward($Info, $Info["sender"][0], $Info["msg"][0], $Info["index"][0]);
        }
     }