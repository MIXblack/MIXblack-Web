    <!-- Footer Lead Form -->
    <div class="footer-sidebar-outer">
        <div class="whatsapp_mobile d-block d-md-none">
            <a href="https://api.whatsapp.com/send?phone=+918479908067" target="_blank" style="position: fixed; left: 0px; top: 40%;">
                <img border="0" alt="whatsapp" src="https://www.aozata.com/wp-content/uploads/2019/01/iconfinder_whatsapp_287520.png" width="55" height="55">
            </a>
        </div>
        
        <div class="footer-collapse-btn-top-outer clearfix" id="clickme">
            <div class="float-left footer-left-sidebar">
                Request a Call back
            </div>
            
            <div class="float-right drop-msg-icon">
                <a class="more-btn" ><i class=""></i></a>
            </div>
        </div>
        
        <div class="footer-sidebar-inner" id="book">
            <form name="sap-enquiry" class="sidebar-form" method="POST" action="">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="" required>
                </div>

                <div class="form-group">
                    <input type="text" pattern="[0-9]{10}" minlength="10" maxlength="10" class="form-control" name="phone" placeholder="Phone Number"  onblur="checkNumber(this)" value="" required>

                    <input type="hidden" class="form-control" name="from"  value="float">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email Id"  value="" required>
                </div>

                <div class="form-group">
                    <select class="form-control" name="services" required>
                        <option value="" style="background: rgba(55, 120, 176, 0.8);">Service Request</option>
                        <option value="Web Development" style="background: rgba(55, 120, 176, 0.8);">Web Development</option>
                        <option value="App Development" style="background: rgba(55, 120, 176, 0.8);">App Development</option>
                        <option value="Graphics Design" style="background: rgba(55, 120, 176, 0.8);">Graphics Design</option>
                        <option value="Digital Marketing" style="background: rgba(55, 120, 176, 0.8);">Digital Marketing</option>
                        <option value="Legal Frameworks" style="background: rgba(55, 120, 176, 0.8);">Legal Frameworks</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="description" placeholder="Discription"  value="" required></textarea>
                </div>
                
                <div class="form-group">
                    <input type="submit" name="footer-popup-form" class="btn btn-light sidebar-btn btn-block" value="Submit">
                </div>
            </form>		  		
        </div>	

    </div>