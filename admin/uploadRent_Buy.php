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
</head>

<body>

  <div id="nav-bar">
    <div id="nav-header"><a id="nav-title" href="index.php">Brittania</a>
      <hr />
    </div>
    <div id="nav-content">
      <div class="nav-button active"><a href="uploadRent_Buy.php"><i class="fas fa-download"></i><span>Rent/Buy</span></a></div>
      <div class="nav-button"><a href="uploadCommercial.php"><i class="fas fa-download"></i><span>Commercial</span></a></div>
      <hr />
      <div id="nav-content-highlight"></div>
    </div>
  </div>

  <div class="container">
    <form class="jotform-form" action="process_upload.php" method="post" enctype="multipart/form-data" name="form_container"
      id="form_container" accept-charset="utf-8" autocomplete="on">
      <div role="main" class="form-all">
        <ul class="form-section page-section">
          <li id="cid_1" class="form-input-wide" data-type="control_head">
            <div class="form-header-group  header-large">
              <div class="header-text httal htvam">
                <h1 id="header_1" class="form-header" data-component="header">Rental/Buy - Upload Property</h1>
              </div>
            </div>
          </li>
          <li class="form-line fixed-width" data-type="control_textbox" id="id_15"><label
              class="form-label form-label-top form-label-auto" id="label_15" for="title" aria-hidden="false"> Title
            </label>
            <div id="cid_15" class="form-input-wide" data-layout="half"> <input type="text" id="title"
                name="title" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:648px"
                size="648" data-component="textbox" aria-labelledby="label_15" value="" required/> </div>
          </li>
          <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_19"><label
              class="form-label form-label-top form-label-auto" id="label_19" for="price" aria-hidden="false"> Price
            </label>
            <div id="cid_19" class="form-input-wide" data-layout="half"> <input type="number" id="price"
                name="price" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px"
                size="310" data-component="textbox" aria-labelledby="label_19" value="" required/> </div>
          </li>
          <li class="form-line" data-type="control_textarea" id="id_6"><label
              class="form-label form-label-top form-label-auto" id="label_6" for="description" aria-hidden="false">
              Description </label>
            <div id="cid_6" class="form-input-wide" data-layout="full"> <textarea id="description" class="form-textarea"
                name="description" style="width:648px;height:100px" data-component="textarea"
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
              class="form-label form-label-top form-label-auto" id="label_8" for="address_l1"
              aria-hidden="false">
              Address </label>
            <div id="cid_8" class="form-input-wide" data-layout="full">
              <div summary="" class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text"
                        id="address_l1" name="address_l1" class="form-textbox form-address-line"
                        data-defaultvalue="" autoComplete="section-input_8 address-line1"
                        data-component="address_line_1" aria-labelledby="label_8 sublabel_8_addr_line1"
                        value="" required/>
                        <label class="form-sub-label" for="address_l1" id="sublabel_8_addr_line1"
                        style="min-height:13px">Address Line 1</label>
                      </span>
                    </span>
                  </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text"
                        id="address_l2" name="address_l2" class="form-textbox form-address-line"
                        data-defaultvalue="" autoComplete="section-input_8 address-line2"
                        data-component="address_line_2" aria-labelledby="label_8 sublabel_8_addr_line2"
                        value="" />
                      <label class="form-sub-label" for="address_l2" id="sublabel_8_addr_line2"
                        style="min-height:13px">Address Line 2</label>
                      </span>
                    </span>
                  </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="city"
                        name="city" class="form-textbox form-address-city" data-defaultvalue=""
                        autoComplete="section-input_8 address-level2" data-component="city"
                        aria-labelledby="label_8 sublabel_8_city"  value="" required/>
                        <label class="form-sub-label" for="city" id="sublabel_8_city" style="min-height:13px">City</label>
                    </span>
                  </span>
                  <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="town"
                        name="town" class="form-textbox form-address-state" data-defaultvalue=""
                        autoComplete="section-input_8 address-level1" data-component="state"
                        aria-labelledby="label_8 sublabel_8_state"  value="" required/><label class="form-sub-label"
                        for="town" id="sublabel_8_state" style="min-height:13px">Town</label>
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="postcode"
                        name="postcode" class="form-textbox form-address-postal" data-defaultvalue=""
                        autoComplete="section-input_8 postal-code" data-component="zip"
                        aria-labelledby="label_8 sublabel_8_postal"  value="" required/>
                      <label class="form-sub-label"
                        for="postcode" id="sublabel_8_postal" style="min-height:13px">Postal / Zip
                        Code</label>
                      </span>
                    </span>
                  </div>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_textarea" id="id_22"><label
              class="form-label form-label-top form-label-auto" id="label_22" for="details" aria-hidden="false">
              Details
            </label>
            <div id="cid_22" class="form-input-wide" data-layout="full"> <textarea id="details" class="form-textarea"
                name="details" style="width:648px;height:100px" data-component="textarea"
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
              class="form-label form-label-top form-label-auto" id="label_23" for="bedroom" aria-hidden="false">
              Bedrooms
            </label>
            <div id="cid_23" class="form-input-wide" data-layout="half"> <input type="number" id="bedroom"
                name="bedroom" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
                style="width:310px" size="310" data-component="textbox" aria-labelledby="label_23" value="" /> </div>
          </li>
          <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_24"><label
              class="form-label form-label-top form-label-auto" id="label_24" for="bathroom" aria-hidden="false">
              Bathrooms </label>
            <div id="cid_24" class="form-input-wide" data-layout="half"> <input type="number" id="bathroom"
                name="bathroom" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
                style="width:310px" size="310" data-component="textbox" aria-labelledby="label_24" value="" /> </div>
          </li>
          <li class="form-line fixed-width form-line-column form-col-3" data-type="control_dropdown" id="id_25"><label
              class="form-label form-label-top form-label-auto" id="label_25" for="type" aria-hidden="false"> Type:
            </label>
            <div id="cid_25" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="type"
                name="type" style="width:197px" data-component="dropdown" aria-label="Type:">
                <option value="">Please Select</option>
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
              </select> </div>
          </li>
          <li class="form-line fixed-width form-line-column form-col-4" data-type="control_dropdown" id="id_28"><label
              class="form-label form-label-top form-label-auto" id="label_28" for="b_r_c" aria-hidden="false">
              Buy/Renting
            </label>
            <div id="cid_28" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="b_r_c"
                name="b_r_c" style="width:197px" data-component="dropdown" aria-label="Buy/Rent">
                <option value="">Please Select</option>
                <option value="Rent">Rent</option>
                <option value="Buy">Buy</option>
              </select> </div>
          </li>
          <li class="form-line fixed-width form-line-column form-col-5" data-type="control_dropdown" id="id_29"><label
              class="form-label form-label-top form-label-auto" id="label_29" for="available" aria-hidden="false">
              Available </label>
            <div id="cid_29" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="available"
                name="available" style="width:197px" data-component="dropdown" aria-label="Available">
                <option value="">Please Select</option>
                <option value="A">Available</option>
                <option value="N">Not Available</option>
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
              class="form-label form-label-top form-label-auto" id="label_32" for="keywords" aria-hidden="false">
              Keywords
              (comma-separated) Garden, Pool, Garage, etc: </label>
            <div id="cid_32" class="form-input-wide" data-layout="half"> <input type="text" id="keywords"
                name="keywords" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
                style="width:648px; text-transform: capitalize;" size="648" data-component="textbox" aria-labelledby="label_32" autocapitalize="characters" value="" /> </div>
          </li>
          <li class="form-line" data-type="control_fileupload" id="id_5"><label
              class="form-label form-label-top form-label-auto" id="label_5" for="images" aria-hidden="false"> Upload Featured Image: </label>
              <div class="upload_container">
                <div class="drop-section">
                    <div class="col">
                        <div class="cloud-icon">
                            <img src=" ../assets/icons/cloud.png" alt="cloud">
                        </div>
                        <span>Drag & Drop your files here</span>
                        <span>OR</span>
                        <button class="file-selector" type="button">Browse Files</button>
                        <input type="file" id="images" class="file-selector-input" name="images[]" multiple>
                    </div>
                    <div class="col">
                        <div class="drop-here">Drop Here</div>
                    </div>
                </div>
                <div class="list-section">
                    <div class="list-title">Uploaded Files</div>
                    <div class="list-items"></div>
                </div>
              </div>  
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

  <script src="../assets/js/upload.js"></script>
</body>

</html>