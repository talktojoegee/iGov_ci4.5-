<?= $this->extend('layouts/master'); ?>

<?= $this->section('extra-styles') ?>
<link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/chat/messagestyle.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
<link rel="stylesheet" href="/assets/css/chat/loading-bar.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<?= $this->endsection() ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <section id="main" class="bg-dark">
    <div id="chat_user_list">
      <div id="owner_profile_details">
        <div id="owner_avtar" style="background-image: url('/assets/images/users/<?= $_SESSION['avatar'] ?? 'avatar.png' ?>'); background-size: 100% 100%">
          <div>
            <div id="online"></div>
          </div>
        </div>
        <div id="owner_profile_text" class="">
          <h6 id="owner_profile_name" class="m-0 p-0"><?=  $_SESSION['full_name'] ?? '' ?></h6>
        </div>
      </div>
      <div id="search_box_container" class="py-3">
        <input type="text" name="txt_search" class="form-control" autocomplete="off" placeholder="Search User" id="search">
      </div>
      <hr/>
      <div id="user_list" class="py-3">
      </div>
    </div>
    <div id="chatbox">
      <div id="data_container" class="">
        <div id="bg_image"></div>
        <h2 class="mt-0">Hi There!</h2>
        <p class="text-center my-2">Choose someone from your list of contacts to start a chat</p>
      </div>
      <div class="chatting_section" id="chat_area" style="display: none">
        <div id="header" class="py-2">
          <div id="name_details" class="pt-2">
            <div id="chat_profile_image" class="mx-2" style="background-size: 100% 100%">
              <div id="online"></div>
            </div>
            <div id="name_last_seen">
              <h6 class="m-0 pt-2"></h6>
              <p class="m-0 py-1"></p>
            </div>
          </div>
          <div id="icons" class="px-4 pt-2">
            <div id="send_mail">
              <a href="" id="mail_link"><i class="fas fa-envelope text-dark"></i></a>
            </div>
            <div id="details_btn" class="ml-3">
              <i class="fas fa-info-circle text-dark"></i>
            </div>
          </div>
        </div>
        <div id="chat_message_area">

        </div>
        <div id="messageBar" class="py-4 px-4">
          <div id="textBox_attachment_emoji_container">
            <div id="text_box_message">
              <input type="text" maxlength = "200" name="txt_message" id="messageText" class="form-control" placeholder="Type your message">
            </div>
            <div id="text_counter">
              <p id="count_text" class="m-0 p-0"></p>
            </div>
          </div>
          <div id="sendButtonContainer">
            <button class="btn" id="send_message">
              <span class="material-icons">send</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="details_of_user">
      <div id="user_details_container_avtar" style="background-size: 100% 100%"></div>
      <h5 class="text-justify" id="details_of_name"></h5>
      <p class="text-justify" id="details_of_bio"></p>
      <div id="user_details_container_details">
        <p class="text-justify" id="details_of_created"></p>
        <p class="text-justify" id="details_of_birthday"></p>
        <p class="text-justify" id="details_of_mobile"><span></p>
        <p class="text-justify" id="details_of_email"><span></p>
        <p class="text-justify" id="details_of_location"><span></p>
      </div>
      <button class="btn btn-danger" id="btn_block">Block User</button>
    </div>
  </section>
  <div id="update_container">
    <div style="background-color:#F5F6FA;" class="p-3 d-flex justify-content-between align-items-center">
      <h5 id="update_container_title" class="m-0 p-0">Update Profile</h5>
      <i class="fas fa-times"></i>
    </div>
    <form class="" id="form_details" autocomplete="off">
      <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" name="txt_dob" id="dob" class="form-control" placeholder="dd-mm-yyyy">
      </div>
      <div class="form-group">
        <label>Contact Number</label>
        <input type="text" maxlength="10" name="txt_phone" placeholder="Write your mobile number" id="phone_num" class="form-control">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="txt_addr" id="address" placeholder="Write your address" class="form-control">
      </div>
      <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="" id="update_bio" placeholder="Write your bio here.."></textarea>
      </div>
      <button class="btn btn-block" id="update_btn" style="border-radius:0px;">
        <span>Save Changes</span>
      </button>
    </form>
  </div>
</div>



<?= $this->endSection(); ?>
<?= $this->section('extra-scripts'); ?>
<script src="/assets/js/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

<script>
  let allUsers = "<?= route_to('get-all-users') ?>";
  $(document).ready(function () {
    var oldDate, newDate, days, hours, min, sec, unique_id, bg_image, inter, inter3, inter2,
      chatBox = document.getElementById('chat_message_area'),
      main = document.getElementById('main'),
      owenerProfileBio = document.getElementById('owner_profile_bio'),
      dob, phone, addr, bio;

    const MAIN_PLAY = gsap.timeline({ paused: true });
    MAIN_PLAY.from("#main", { duration: 0.5, opacity: 0 });

    //Main funtion which will run at the time of page load
    //UserSidebarIn
    function barIn() {
      $('#details_of_user').css('width', '20%');
      $('#chatbox').css('width', '55%');
      $('#details_of_user').children().show();
    }
    //UserSidebarOut
    function barOut() {
      $('#details_of_user').children().hide();
      $('#details_of_user').css('width', '0');
      $('#chatbox').css('width', '75%');
    }

    //getting all user list except me
    function getUserList() {
      return new Promise(function (resolve, reject) { //Creating new Promise Chain
        $.ajax({
          url: allUsers, //allUsers
          type: 'get',
          async: false,
          success: function (data) {
            if (data != "") {
              resolve(data);
            }
          }
        })
      }).then(function (data) { //This function setting the user list
        document.getElementById('user_list').innerHTML = data; //setting data to the user list
        let ownDetails = "<?= route_to('own-details') ?>";
        $.get(ownDetails, function (data) {
          jsonData = JSON.parse(data);
          dob = jsonData[0]['employee_dob'];
          phone = jsonData[0]['employee_phone'];
          addr = jsonData[0]['employee_address'];
          bio = jsonData[0]['employee_level'];
          if (dob.length != 0 && addr.length != 0 && phone.length != 0 && bio.length != 0) {
            owenerProfileBio.classList.remove('text-warning');
            owenerProfileBio.innerHTML = (bio.length > 28) ? bio.slice(0, 28) + "..." : bio;
          } else {
            owenerProfileBio.innerHTML = "Profile isn't completed";
            owenerProfileBio.classList.add('text-warning');
          }
        })
        $('.innerBox').click(function () {

          barIn();
          $('.chatting_section').css('display', '');

          unique_id = $(this).find('#user_avtar').children('#hidden_id').val();
          bg_image = $(this).find('#user_avtar').css('background-image').split('"')[1];

          clearInterval(inter);
          clearInterval(inter3);

          getBlockUserData();
          setInterval(getBlockUserData,100);

          getUserDetails(unique_id);
          inter2 = setInterval(getUserList, 1000);
          inter3 = setInterval(function () {
            getUserDetails(unique_id)
          }, 1000000 /*1000*/);
          sendUserUniqIDForMsg(unique_id, bg_image);

          inter = setInterval(function () {
            sendUserUniqIDForMsg(unique_id, bg_image);
          }, 100);
        })
        $('.innerBox').mouseover(function () {
          clearInterval(inter2);
        })
        $('.innerBox').mouseleave(function () {
          inter2 = setInterval(getUserList, 5000);
        })
      })
    }
    function getUserDetails(uniq_id) {
      let url = "<?= route_to('get-one-user') ?>";
      $.post(url, { data: uniq_id }, function (data) {
        let res_data = JSON.parse(data);
        setUserDetails(res_data);
      })
    }
    function setUserDetails(data) {
      let user_name = `${data[0]['employee_f_name']} ${data[0]['employee_l_name']}`;
      let status = data[0]['user_online'];
      let avtar = `/assets/images/users/${data[0]['employee_avatar']}`;
      let last_seen = data[0]['last_logout'] || null;
      offlineOnlineIndicator(status, last_seen);
      $('#name_last_seen h6').html(user_name);
      $('#chat_profile_image').css('background-image', `url(${avtar})`);
      $('#new_message_avtar').css('background-image', `url(${avtar})`);
      $('#mail_link').attr('href', `mailto:${data[0]['employee_mail']}`);

      $('#user_details_container_avtar').css('background-image', `url(${avtar})`);
      $('#details_of_user h5').html(user_name);
      (data[0]['bio'].length > 1) ? $('#details_of_bio').html(data[0]['bio']) : $('#details_of_bio').html("--Not Given--");

      $('#details_of_created').html(`Created at : ${data[0]['created_at']}`);
      $('#details_of_email').html(`<span><i class="fas fa-envelope text-dark pr-2"></i></span>${data[0]['employee_mail']}`);

      (data[0]['employee_dob'].length > 1) ?
        $('#details_of_birthday').html(`<span><i class="fas fa-birthday-cake text-dark pr-2"></i></span>${data[0]['employee_dob']}`) :
        $('#details_of_birthday').html(`<span><i class="fas fa-birthday-cake text-dark pr-2"></i></span>--Not Given--`);

      (data[0]['employee_phone'].length > 1) ?
        $('#details_of_mobile').html(`<span><i class="fas fa-mobile-alt text-dark pr-2"></i></span>${data[0]['employee_phone']}`) :
        $('#details_of_mobile').html(`<span><i class="fas fa-mobile-alt text-dark pr-2"></i></span>--Not Given--`);

      (data[0]['employee_address'].length > 1) ?
        $('#details_of_location').html(`<span><i class="fas fa-map-marker-alt text-dark pr-2"></i></span>${data[0]['employee_address']}`) :
        $('#details_of_location').html(`<span><i class="fas fa-map-marker-alt text-dark pr-2"></i></span>--Not Given--`);


    }

    function offlineOnlineIndicator(data, last_seen) {
      if (data == 'active') {
        $('#name_last_seen p').html("Active now");
        $("#chat_profile_image #online").show();
      } else {
        $("#chat_profile_image #online").hide();
        getLastSeen(last_seen);
      }
    }
    function getLastSeen(data) {
      var { hours, min, sec } = calculateTime(data);
      if (days > 0) {
        $('#name_last_seen p').html(`Last active on ${data}`);
      }
      else {
        (hours > 0) ? $('#name_last_seen p').html(`Last seen at ${hours} hours ${min} minutes ago`) :
          (min > 0) ? $('#name_last_seen p').html("Last seen at " + min + " minutes ago") :
            $('#name_last_seen p').html("Last seen just now");
      }
    }
    function calculateTime(data) {
      oldDate = new Date(data).getTime();
      newDate = new Date().getTime();
      differ = newDate - oldDate;
      days = Math.floor(differ / (1000 * 60 * 60 * 24));
      hours = Math.floor((differ % (1000 * 60 * 60 * 24)) / (60 * 60 * 1000));
      min = Math.floor((differ % (1000 * 60 * 60)) / (60 * 1000));
      sec = Math.floor((differ % (1000 * 60)) / 1000);
      var obj = {
        hours: hours,
        min: min,
        sec: sec
      };
      return obj;
    }
    //sending unique_id which is clicked for messages
    function sendUserUniqIDForMsg(uniq_id, bg_image) {
      let messageUrl = "<?= route_to('get-message') ?>";
      $.post(messageUrl, { data: uniq_id, image: bg_image }, function (data) {
        setMessageToChatArea(data, bg_image);//setting messages to the chatting section
      });
    }
    function setMessageToChatArea(data, bg_image) {
      scrollToBottom();
      var res_data;
      if (data.length > 5) {
        $('#chat_message_area').html(data);
      } else {
        var profileName = $('#name_last_seen h6').html();
        let setNoMessageUrl = "<?= route_to('set-no-message') ?>";
        $.ajax({
          url: setNoMessageUrl,
          type: 'post',
          async: false,
          data: { image: bg_image, name: profileName },
          success: function (data) {
            res_data = data;
          }
        })
        $('#chat_message_area').html(res_data);
      }
    }
    $('#chat_message_area').mouseenter(function () {
      chatBox.classList.add('active');
    });
    $('#chat_message_area').mouseleave(function () {
      chatBox.classList.remove('active');
    });
    function scrollToBottom() {
      inter4 = setInterval(() => {
        if (!chatBox.classList.contains('active')) {
          chatBox.scrollTop = chatBox.scrollHeight;
        }
      });
    }
    $('#search').keyup(function (e) {
      var user = document.querySelectorAll('.user');
      var name = document.querySelectorAll('#user_list h6');
      var val = this.value.toLowerCase();
      if (val.length > 0) {
        clearInterval(inter2);
        for (let i = 0; i < user.length; i++) {
          nameVal = name[i].innerHTML
          if (nameVal.toLowerCase().indexOf(val) > -1) {
            user[i].style.display = '';
          } else {
            user[i].style.display = 'none';
          }
        }
      } else {
        inter2 = setInterval(getUserList, 5000);
      }
    });
    function getCharLength() {
      const MAX_LENGTH = 200;
      var len = document.getElementById('messageText').value.length;
      if (len <= MAX_LENGTH) {
        $('#count_text').html(`${len}/200`);
      }
    }
    setInterval(getCharLength, 10);
    $('#logout').click(function (e) {
      e.preventDefault();
      var date = new Date();
      date = new Date(date);
      date = date.toLocaleString();
      $.ajax({
        url: 'logout',
        type: 'post',
        data: "date=" + date,
        success: function (res) {
          location.href = res;
        }
      })
    });
    //send message after button click
    $('#send_message').click(function (e) {
      var d = new Date(),
        messageHour = d.getHours(),
        messageMinute = d.getMinutes(),
        messageSec = d.getSeconds(),
        messageYear = d.getFullYear(),
        messageDate = d.getDate(),
        messageMonth = d.getMonth() + 1,
        actualDateTime = `${messageYear}-${messageMonth}-${messageDate} ${messageHour}:${messageMinute}:${messageSec}`;
      let message = $('#messageText').val();
      let data = {
        message: message,
        datetime: actualDateTime,
        uniq: unique_id
      }
      let jsonData = JSON.stringify(data);
      let sendUrl = "<?= route_to('send-message') ?>";
      $.post(sendUrl, { data: jsonData }, function (data) {
        $('#messageText').val('');
      })
    })
    // my details edit icon
    $('#edit_icon').click(function () {
      $('#main').addClass('blur');
      $('#update_container').show();
      $('#update_bio').focus();
      $('#dob').val(dob);
      $('#phone_num').val(phone);
      $('#update_bio').val(bio);
      $('#address').val(addr);
    })
    $('#update_container i').click(function () {
      $('#main').removeClass('blur');
      $('#update_container').hide();
    })
    //update form container submit event
    $('#form_details').on('submit', function (e) {
      e.preventDefault();
      var newDate = $('#dob').val();
      var newPhone = $('#phone_num').val();
      var newAddress = $('#address').val();
      var newBio = $('#update_bio').val();
      $.post('Message/updateBio', { dob: newDate, phone: newPhone, address: newAddress, bio: newBio }, function (data) {
        $('#main').removeClass('blur');
        $('#update_container').hide();
      })
    })
    $('#details_btn').click(function () {
      var bar = document.getElementById('details_of_user').style;
      if (bar.width == "20%") {
        barOut();
      } else {
        barIn();
      }
    })
    $('#btn_block').click(function () {
      var d = new Date(),
        messageHour = d.getHours(),
        messageMinute = d.getMinutes(),
        messageSec = d.getSeconds(),
        messageYear = d.getFullYear(),
        messageDate = d.getDate(),
        messageMonth = d.getMonth() + 1,
        actualDateTime = `${messageYear}-${messageMonth}-${messageDate} ${messageHour}:${messageMinute}:${messageSec}`;
      if (this.innerHTML == "Block User") {
        $.post('Message/blockUser', { time: actualDateTime, uniq: unique_id })
      } else {
        $.post('Message/unBlockUser', { uniq: unique_id })
      }
    })
    //working on block & unblock program
    function getBlockUserData() {
      $.post('Message/getBlockUserData', { uniq: unique_id }, function (data) {
        var jsonData = JSON.parse(data);
        if (jsonData.length == 1) {
          for (var i = 0; i < jsonData.length; i++) {
            if (jsonData[i]['blocked_from'] == unique_id) {
              $('#messageText').attr('disabled', '');
              $('#messageText').attr('placeholder', 'This user is not receiving messages at this time.');
              $('#messageText').css('cursor', 'no-drop');
              $('#btn_block').html('Block User');
              $('#send_message').attr('disabled', '');
              $('#send_message').css('cursor', 'no-drop');
            } else {
              $('#messageText').attr('disabled', '');
              $('#messageText').attr('placeholder', 'You have blocked this user');
              $('#btn_block').html('Unblock User');
              $('#messageText').css('cursor', 'no-drop');

              $('#send_message').attr('disabled', '');
              $('#send_message').css('cursor', 'no-drop');
            }
          }
        } else if (jsonData.length == 2) {
          $('#messageText').attr('disabled', '');
          $('#messageText').attr('placeholder', 'You both are blocked each other');
          $('#btn_block').html('Unblock User');
          $('#messageText').css('cursor', 'no-drop');
          $('#send_message').attr('disabled', '');
          $('#send_message').css('cursor', 'no-drop');
        } else {
          $('#messageText').removeAttr('disabled');
          $('#messageText').attr('placeholder', 'Start Typing. . . .');
          $('#btn_block').html('Block User');
          $('#messageText').css('cursor', '');
          $('#send_message').removeAttr('disabled');
          $('#send_message').css('cursor', '');
        }
      })
    }
    Pace.on('done', function () {
      MAIN_PLAY.play();
    })
    getUserList(); //Calling the root function without interval
    inter2 = setInterval(getUserList, 5000); //Calling the root function with interval
  })


</script>
<?= $this->endSection(); ?>
