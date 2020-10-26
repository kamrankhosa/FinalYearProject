 <?php require 'header.php'; ?>

  
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
 <div class="row">
                    <div class="col-lg-12">
                        <div class="cards__heading">
                    <h3> 
    Chatting
  
                                </h3>
    </div>
                    </div>
                </div>

                <hr />
    <?php if (!empty($this->session->userdata('success'))) {?>
                  <div class="alert alert-success text-danger" role="alert">
                    <?php echo $this->session->userdata('success'); 
                    $this->session->unset_userdata('success');

                    ?>
                  </div>
               <?php }?>
               <?php if (!empty($this->session->userdata('error'))) {?>
                  <div class="alert alert-danger text-dark" role="alert">
                    <?php echo $this->session->userdata('error'); 
                    $this->session->unset_userdata('error');
                    ?>
                  </div>
               <?php }?>
   
 <!-- chatting -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
             
            </div>
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people">
                  <div class="headind_srch">
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search Chat" id="searching">
                        <span class="input-group-addon">
                          <button type="submit"> <i class="fa fa-search" aria-hidden="true" onclick="searching_message()"></i> </button>
                        </span> </div>
                    </div>
                  </div>
                  <div class="inbox_chat">
                    <?php $n=1; $messages=get_table_data('tblcontact_messages')->result();
                    foreach ($messages as $message) { ?>
                    <div class="chat_list active_chat">
                      <div class="chat_people" onclick="get_messages(<?php echo $message->ID; ?>)">
                        <div class="chat_img"> <img src="<?php echo base_url(); ?>assets/admin/images/avatar<?php echo $n++; 
                        if($n==6){
                          $n=1;
                        } ?>.jpg" alt="<?php echo $message->Name; ?> " class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5><?php echo $message->Name; ?> <span class="chat_date"><?php $date=strtotime($message->Sent_on);
                                    echo date('M d, Y',$date);
                                     ?></span></h5>
                          <p><?php echo substr($message->Message, 0,20); ?>.</p>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  </div>
                </div>
                <div class="mesgs">
                  <div class="msg_history" id="messages_here">
                    <!-- <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="<?php echo base_url(); ?>assets/admin/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Coming along nicely, we've got a Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          </p>
                          <span class="time_date"> 10:05 AM | Mar 9</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Great start, I've added some Lorem ipsum dolor sit amet. </p>
                        <span class="time_date"> 12:15 PM | Mar 9</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="<?php echo base_url(); ?>assets/admin/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                          <span class="time_date"> 09:16 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>But I must explain to you.</p>
                        <span class="time_date"> 03:15 PM | Today</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="<?php echo base_url(); ?>assets/admin/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores.</p>
                          <span class="time_date"> 03:16 PM | Today</span>
                        </div>
                      </div>
                    </div> -->
                  </div>
                 <!--  <div class="type_msg">
                    <div class="input_msg_write">
                      <input type="text" class="write_msg" placeholder="Type a message" />
                      <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o"
                          aria-hidden="true"></i></button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 <?php require 'footer.php'; ?>
