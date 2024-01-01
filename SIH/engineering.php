<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Engineering Colleges</title>
</head>

<body>
  <style>
    details {
      background-color: #f4f4f4;
      padding: 12px 20px;
      font-family: din, sans-serif;
    }


    .choose {
      width: 25%;
      position: fixed;
      padding: 0 40px;
    }

    body {
      background-color: #CF102D;
      margin: 0;
        }

    .row {
      display: flex;
    }

    .top {
      overflow: hidden;
      display: flex;
      background-color: #e9e9e9;
      height: 50px;
      padding: 1%;
    }

    .top a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .top a:hover {
      background-color: #ddd;
      color: black;
    }

    .nav {
      float: right;
      flex-direction: row-reverse;
      padding-left: 740px;
    }

    .nav a.active {
      background-color: #2196F3;
      color: white;
    }

    .cont {
      display: flex;
      padding-left: 5px;
    }

    .img {
      display: flex;
    }

    .new {
      padding-left: 10px;
    }

    img {
      height: 200px;
      width: 200px;
    }

    fieldset {
      padding: 50px;
      background-color: white;
      width: 100%;
      border-left: 5px solid lightcoral;
      border-radius: 20px;
    }

    fieldset:not(last-of-type) {
      border-top: lightcoral;
      border-right: lightcoral;
    }

    .choose {
      width: 25%;
      position: fixed;
      padding: 0 40px;
    }

    .colleges {
      padding-left: 500px;
    }

    details {
      background-color: #f4f4f4;
      padding: 12px 20px;
      font-family: din, sans-serif;
    }

    .be,
    .me {
      padding-right: 20px;
    }

    button {
      background-color: #CF102D;
      color: white;
      border: 0;
      border-radius: 5px;
      padding: 10px 20px;
    }

    fieldset:hover {
      opacity: 0.6;
      transition: 0.5s;
    }
  </style>
  <div class="top">
    <a href="#tu">Top Universities</a>&emsp;
    <a href="#tc">Top Courses</a>&emsp;
    <a href="#colleges">Colleges</a>&emsp;
    <a href="#exams">Exams</a>&emsp;
    <a href="#adm">Admission</a>
    <div class="nav">
      <a class="active" href="login.html">LOGIN</a>
      <a href="#down">Download</a>
    </div>
  </div>
  <br>
  <section class="row">
    <div class="choose">
      <div>
        <details open>
          <summary>Select States:</summary><br>
          <select size="1" onchange="window.location.href=this.value">
            <option value="#">Select States:
            </option>
            <option>Andhra Pradesh</option>
            <option value="#tamilnadu">Tamil Nadu</option>
            <option>Kerela</option>
            <option>Krnataka</option>
            <option>Maharastra</option>
            <option>Odisha</option>
          </select>
        </details>
      </div>
      <div>
        <details open>
          <summary>Select Cities:</summary>
          <br>
          <select name="links" size="1" onchange="window.location.href=this.value">
            <option value="#">Select Cities:</option>
            <option value="#selam">Selam</option>
            <option value="#madurai">Madurai</option>
            <option value="#coimbatore">Coimbatore</option>
            <option value="#vellore">Vellore</option>
            <option value="#chennai">Chennai</option>
            <option value="#thanjavur">Thanjavur</option>
            <option value="#trichy">Trichy</option>
            <option value="#dindugul">Dindugul</option>
          </select>
        </details>
      </div>
      <div>
        <details open>
          <summary>Select Fees:</summary>
          <br>
          <select>
            <option>Less than 50,000</option>
            <option>50,000 - 1L</option>
            <option>1L-2L</option>
            <option>2L-3L</option>
            <option>3L-4L</option>
            <option>4L-5L</option>
          </select>
        </details>
      </div>
      <div>
        <details open>
          <summary>Types of Colleges:</summary>
          <br>
          <select>
            <option>Private</option>
            <option>Government</option>
          </select>
      </div>
      <div>
        <details open>
          <summary>Course Types:</summary>
          <br>
          <select>
            <option>Degree</option>
            <option>Diploma</option>
            <option>Certification</option>
          </select>
        </details>
      </div>
      <div>
        <details open>
          <summary>Courses:</summary>
          <br>
          <select>
            <option>Computer Science and Engineering</option>
            <option>mechanical Engineering</option>
            <option>Civil Engineering</option>
            <option>Electrical and Electronics Engineering</option>
            <option>Information Technology</option>
            <option>Electronics and Communication Engineering</option>
          </select>
        </details>
      </div>
      <div>
        <details open>
          <summary>Course Duration:</summary>
          <br>
          <select>
            <option>1 Year</option>
            <option>2 Years</option>
            <option>3 Years</option>
            <option>4 Years</option>
          </select>
        </details>
      </div>
      <div>
        <details open>
          <summary>Gender Accepted:</summary>
          <br>
          <select>
            <option>COED</option>
            <option>Girls</option>
          </select>
        </details>
      </div>
    </div>
    <a name="tamilnadu"></a>
    <div class="colleges">
      <a name="madurai"></a>
      <div class="tce">
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg1.png">
            <div class="new">
              <h3>Thiagarajar College of Engineering,Madurai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.50,000</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.50,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">8.5/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="vel">
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg2.png">
            <div class="new">
              <div>
                <h3>Velammal College of Engineering.Madurai</h3>
              </div>
              <div class="cont">
                <div class="be">
                  <p>Rs.2,00,000</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.60,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">8.6/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg3.png">
            <div class="new">
              <h3>KLN Engineering of College,Madurai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.2,00,000</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.60,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">7.5/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg4.png">
            <div class="new">
              <h3>ANNA University of Technology,Madurai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.43,800</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.53,800</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">7.5/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <a id="chennai"></a>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg5.png">
            <div class="new">
              <h3>Hindustan Institute of Technology and Science,Chennai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.229,500</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.125,500</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">6.6/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg6.png">
            <div class="new">
              <h3>IIT Madras,Chennai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.75,116</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.23,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">8.5/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg7.png">
            <div class="new">
              <h3>Chennai Institute of Technology,Chennai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.55,000</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.50,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">8.2/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg8.png">
            <div class="new">
              <h3>SSN College of Engineering,Chennai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.50,000</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.50,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">8.3/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg9.png">
            <div class="new">
              <h3>Sathiyabama Institute of Science and Technology,Chennai</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.80,000</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.1,30,000</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">7.9/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <a name="coimbatore"></a>
      <div>
        <fieldset>
          <div>
            <div class="img">
              <img src="images/engineeringclg10.png">
              <div class="new">
                <h3>P.S.G College of Technology,Coimbatore</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.88,140</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.1,54,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.8/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <div class="img">
            <img src="images/engineeringclg11.png">
            <div class="new">
              <h3>Coimbatore Institute of Technology,Coimbatore</h3>
              <div class="cont">
                <div class="be">
                  <p>Rs.24,600</p>
                  <h6>B.E/B.TECH</h6>
                </div>
                <div class="me">
                  <p>Rs.1,32,700</p>
                  <h6>M.E/M.TECH</h6>
                </div>
                <div>
                  <p style="color:#ff7900">7.9/10</p>
                  <h6>Based on user reviewers</h6>
                </div>
              </div>
              <div class="apply">
                <button>Apply Now</button>
              </div>
            </div>
          </div>
        </fieldset>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg12.png">
              <div class="new">
                <h3>Kumaraguru College of Technology,Coimbatore</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.88,140</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.1,54,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.8/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <a name="selam"></a>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg13.png">
              <div class="new">
                <h3>Salem College of Engineering and Technology,Selam</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.50,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.50,500</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.1/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg14.png">
              <div class="new">
                <h3>Sona College of Technology,Selam</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.55,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.55,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.3/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <a name="trichy"></a>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg15.png">
              <div class="new">
                <h3>NIT Tiruchirapalli,Trichy</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.161,7500</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.109,750</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.5/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg16.png">
              <div class="new">
                <h3>K.Ramakrishnan College of Technology,Trichy</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.65,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.30,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">7.5/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg17.png">
              <div class="new">
                <h3>Kongunadu College of Technology,Trichy</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.50,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.50,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.9/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg18.png">
              <div class="new">
                <h3>Trichy Engineering College,Trichy</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.60,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.60,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.1/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <a name="vellore"></a>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg19.png">
              <div class="new">
                <h3>Vellore Institute of Technology,Vellore</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.55,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.55,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.3/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg20.png">
              <div class="new">
                <h3>Thanthai Periyar Government Institute of Technology,Vellore</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.10,220</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.10,970</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">7.3/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <a name="thanjavur"></a>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg21.png">
              <div class="new">
                <h3>Sastra University,Thanjavur</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.10,220</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.10,970</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">7.3/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <a name="dindugul"></a>
        <div>
          <fieldset>
            <div class="img">
              <img src="images/engineeringclg22.png">
              <div class="new">
                <h3>PSNA College of Engineering and Technology,Dindigul</h3>
                <div class="cont">
                  <div class="be">
                    <p>Rs.2,00,000</p>
                    <h6>B.E/B.TECH</h6>
                  </div>
                  <div class="me">
                    <p>Rs.80,000</p>
                    <h6>M.E/M.TECH</h6>
                  </div>
                  <div>
                    <p style="color:#ff7900">8.3/10</p>
                    <h6>Based on user reviewers</h6>
                  </div>
                </div>
                <div class="apply">
                  <button>Apply Now</button>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="index.js"></script>
</body>

</html>
