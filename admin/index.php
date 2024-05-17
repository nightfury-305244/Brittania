<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Redirect to login page if not logged in
  header('Location: ucAdminP.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/0fa496f194.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/stylesAP.css">
  <link type="text/css" rel="stylesheet" href="../assets/css/jotfor/5e6b428acc8c4e222d1beb91.css" />
  <title>Brittania Admin</title>
  <script src="../assets/js/fileuploader.js"></script>
</head>

<body>

  <div id="nav-bar">
    <div id="nav-header"><a id="nav-title" href="https://codepen.io" target="_blank">Brittania</a>
      <hr />
    </div>
    <div id="nav-content">
      <div class="nav-button"><i class="fas fa-palette"></i><a href="uploadRent.php"><span>Your Work</span></a></div>
      <div class="nav-button"><i class="fas fa-images"></i><span>Assets</span></div>
      <div class="nav-button"><i class="fas fa-thumbtack"></i><span>Pinned Items</span></div>
      <hr />
      <div class="nav-button"><i class="fas fa-heart"></i><span>Following</span></div>
      <div class="nav-button"><i class="fas fa-chart-line"></i><span>Trending</span></div>
      <div class="nav-button"><i class="fas fa-fire"></i><span>Challenges</span></div>
      <div class="nav-button"><i class="fas fa-magic"></i><span>Spark</span></div>
      <hr />
      <div class="nav-button"><i class="fas fa-gem"></i><span>Codepen Pro</span></div>
      <div id="nav-content-highlight"></div>
    </div>
  </div>

  <div class="container">
    <form class="jotform-form" onsubmit="" method="post" enctype="multipart/form-data" name="form_241363650981156"
      id="241363650981156" accept-charset="utf-8" autocomplete="on">
      <div role="main" class="form-all">
        <ul class="form-section page-section">
          <li id="cid_1" class="form-input-wide" data-type="control_head">
            <div class="form-header-group  header-large">
              <div class="header-text httal htvam">
                <h1 id="header_1" class="form-header" data-component="header">Rental - Upload Property</h1>
              </div>
            </div>
          </li>
          <li class="form-line fixed-width" data-type="control_textbox" id="id_15"><label
              class="form-label form-label-top form-label-auto" id="label_15" for="input_15" aria-hidden="false"> Title
            </label>
            <div id="cid_15" class="form-input-wide" data-layout="half"> <input type="text" id="input_15"
                name="q15_title" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:648px"
                size="648" data-component="textbox" aria-labelledby="label_15" value="" /> </div>
          </li>
          <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_19"><label
              class="form-label form-label-top form-label-auto" id="label_19" for="input_19" aria-hidden="false"> Price
            </label>
            <div id="cid_19" class="form-input-wide" data-layout="half"> <input type="number" id="input_19"
                name="q19_price" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px"
                size="310" data-component="textbox" aria-labelledby="label_19" value="" /> </div>
          </li>
          <li class="form-line" data-type="control_textarea" id="id_6"><label
              class="form-label form-label-top form-label-auto" id="label_6" for="input_6" aria-hidden="false">
              Description </label>
            <div id="cid_6" class="form-input-wide" data-layout="full"> <textarea id="input_6" class="form-textarea"
                name="q6_comments6" style="width:648px;height:100px" data-component="textarea"
                aria-labelledby="label_6"></textarea> </div>
          </li>
          <li class="form-line" data-type="control_divider" id="id_26">
            <div id="cid_26" class="form-input-wide" data-layout="full">
              <div class="divider" data-component="divider"
                style="border-bottom-width:1px;border-bottom-style:solid;border-color:#ecedf3;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_address" id="id_8"
            data-compound-hint=",,,,Please Select,,Please Select,"><label
              class="form-label form-label-top form-label-auto" id="label_8" for="input_8_addr_line1"
              aria-hidden="false">
              Address </label>
            <div id="cid_8" class="form-input-wide" data-layout="full">
              <div summary="" class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text"
                        id="input_8_addr_line1" name="q8_address[addr_line1]" class="form-textbox form-address-line"
                        data-defaultvalue="" autoComplete="section-input_8 address-line1"
                        data-component="address_line_1" aria-labelledby="label_8 sublabel_8_addr_line1"
                        value="" />
                        <label class="form-sub-label" for="input_8_addr_line1" id="sublabel_8_addr_line1"
                        style="min-height:13px">Address Line 1</label>
                      </span>
                    </span>
                  </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text"
                        id="input_8_addr_line2" name="q8_address[addr_line2]" class="form-textbox form-address-line"
                        data-defaultvalue="" autoComplete="section-input_8 address-line2"
                        data-component="address_line_2" aria-labelledby="label_8 sublabel_8_addr_line2"
                        value="" />
                      <label class="form-sub-label" for="input_8_addr_line2" id="sublabel_8_addr_line2"
                        style="min-height:13px">Address Line 2</label>
                      </span>
                    </span>
                  </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_8_city"
                        name="q8_address[city]" class="form-textbox form-address-city" data-defaultvalue=""
                        autoComplete="section-input_8 address-level2" data-component="city"
                        aria-labelledby="label_8 sublabel_8_city" required="" value="" />
                        <label class="form-sub-label" for="input_8_city" id="sublabel_8_city" style="min-height:13px">City</label>
                    </span>
                  </span>
                  <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_8_state"
                        name="q8_address[state]" class="form-textbox form-address-state" data-defaultvalue=""
                        autoComplete="section-input_8 address-level1" data-component="state"
                        aria-labelledby="label_8 sublabel_8_state" required="" value="" /><label class="form-sub-label"
                        for="input_8_state" id="sublabel_8_state" style="min-height:13px">Town</label>
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="number" id="input_8_postal"
                        name="q8_address[postal]" class="form-textbox form-address-postal" data-defaultvalue=""
                        autoComplete="section-input_8 postal-code" data-component="zip"
                        aria-labelledby="label_8 sublabel_8_postal" required="" value="" />
                      <label class="form-sub-label"
                        for="input_8_postal" id="sublabel_8_postal" style="min-height:13px">Postal / Zip
                        Code</label>
                      </span>
                    </span>
                  </div>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_textarea" id="id_22"><label
              class="form-label form-label-top form-label-auto" id="label_22" for="input_22" aria-hidden="false">
              Details
            </label>
            <div id="cid_22" class="form-input-wide" data-layout="full"> <textarea id="input_22" class="form-textarea"
                name="q22_details" style="width:648px;height:100px" data-component="textarea"
                aria-labelledby="label_22"></textarea> </div>
          </li>
          <li class="form-line" data-type="control_divider" id="id_27">
            <div id="cid_27" class="form-input-wide" data-layout="full">
              <div class="divider" data-component="divider"
                style="border-bottom-width:1px;border-bottom-style:solid;border-color:#ecedf3;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
              </div>
            </div>
          </li>
          <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_23"><label
              class="form-label form-label-top form-label-auto" id="label_23" for="input_23" aria-hidden="false">
              Bedrooms
            </label>
            <div id="cid_23" class="form-input-wide" data-layout="half"> <input type="number" id="input_23"
                name="q23_bedrooms" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
                style="width:310px" size="310" data-component="textbox" aria-labelledby="label_23" value="" /> </div>
          </li>
          <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_24"><label
              class="form-label form-label-top form-label-auto" id="label_24" for="input_24" aria-hidden="false">
              Bathrooms </label>
            <div id="cid_24" class="form-input-wide" data-layout="half"> <input type="number" id="input_24"
                name="q24_typeA24" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
                style="width:310px" size="310" data-component="textbox" aria-labelledby="label_24" value="" /> </div>
          </li>
          <li class="form-line fixed-width form-line-column form-col-3" data-type="control_dropdown" id="id_25"><label
              class="form-label form-label-top form-label-auto" id="label_25" for="input_25" aria-hidden="false"> Type:
            </label>
            <div id="cid_25" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="input_25"
                name="q25_type" style="width:197px" data-component="dropdown" aria-label="Type:">
                <option value="">Please Select</option>
                <option selected="" value="House">House</option>
                <option value="Apartment">Apartment</option>
              </select> </div>
          </li>
          <li class="form-line fixed-width form-line-column form-col-4" data-type="control_dropdown" id="id_28"><label
              class="form-label form-label-top form-label-auto" id="label_28" for="input_28" aria-hidden="false">
              Buy/Rent
            </label>
            <div id="cid_28" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="input_28"
                name="q28_typeA28" style="width:197px" data-component="dropdown" aria-label="Buy/Rent">
                <option value="">Please Select</option>
                <option selected="" value="Rent">Rent</option>
                <option value="Buy">Buy</option>
              </select> </div>
          </li>
          <li class="form-line fixed-width form-line-column form-col-5" data-type="control_dropdown" id="id_29"><label
              class="form-label form-label-top form-label-auto" id="label_29" for="input_29" aria-hidden="false">
              Available </label>
            <div id="cid_29" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="input_29"
                name="q29_typeA29" style="width:197px" data-component="dropdown" aria-label="Available">
                <option value="">Please Select</option>
                <option selected="" value="Available">Available</option>
                <option value="Not Available">Not Available</option>
              </select> </div>
          </li>
          <li class="form-line" data-type="control_divider" id="id_30">
            <div id="cid_30" class="form-input-wide" data-layout="full">
              <div class="divider" data-component="divider"
                style="border-bottom-width:1px;border-bottom-style:solid;border-color:#ecedf3;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
              </div>
            </div>
          </li>
          <li class="form-line fixed-width" data-type="control_textbox" id="id_32"><label
              class="form-label form-label-top form-label-auto" id="label_32" for="input_32" aria-hidden="false">
              Keywords
              (comma-separated) Garden, Pool, Garage, etc: </label>
            <div id="cid_32" class="form-input-wide" data-layout="half"> <input type="text" id="input_32"
                name="q32_keywordscommaseparated" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
                style="width:648px" size="648" data-component="textbox" aria-labelledby="label_32" value="" /> </div>
          </li>
          <li class="form-line" data-type="control_fileupload" id="id_5"><label
              class="form-label form-label-top form-label-auto" id="label_5" for="input_5" aria-hidden="false"> Upload Featured Image: </label>
              
          </li>
          <li class="form-line" data-type="control_button" id="id_2">
            <div id="cid_2" class="form-input-wide" data-layout="full">
              <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button
                  id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                  data-component="button" data-content="">Upload Property</button></div>
            </div>
          </li>
        </ul>
      </div>
    </form>
  </div>

</body>

</html>