<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consent Form</title>
    <style>
        .clearfix {
            clear: both;
        }
    </style>
</head>

<body>
    <header id="banner" class="body">
        &nbsp;
    </header>
    <div class="centered" style="left:10%;transform: translate(10%,0%);width:80%">
        <aside id="featured" class="body" align="justify">
            <article>
                <!-- Consent Form Content Goes Here... -->
                <hgroup align ="center">
                <h2>Consent Form</h2>
            </hgroup>
            <h4>Study Title:  Social Cognitive Aspects of Decision Making in Cyber-Security</h4>

            <p>Principal Investigator: Dr. Cleotilde Gonzalez <br>
                Social and Decision Sciences Department <br>
                223C Porter Hall <br>
                412.268.6242 <br>
                conzalez@andrew.cmu.edu</p>

            <h4>Purpose of this Study</h4>
            <p>The purpose of the study is to investigate the basic human mechanisms of cue learning and utility-based decision making. This project is funded by the Army Research Laboratory, ARL-CRA-Cylab-Pennsylvania State University.</p>

            <h4>Procedures  </h4>
            <p>You will be asked to utilize a computer tool that simulates abstract and realistic cyber attacks. You will act in the role of a security analyst, observe network events, and determine if there is an attack on the cyber infrastructure. You will later be asked to respond to a survey. You may also watch a short video or read a short commentary and be asked to respond afterwards.
                <br>
                The duration and location of the study will be consistent with the advertisement for your session.  </p>

            <h4>Participant Requirements  </h4>
            <p>You must verify their identification with a picture ID card and will not be allowed to participate in experiments more than once.  You must be at least 18 years old to participate in this study.</p>

            <h4>Risks</h4>
            <p>The risks and discomfort associated with participation in this study are no greater than those ordinarily encountered in daily life or during the performance of routine physical or psychological examinations or tests.  </p>

            <h4>Benefits</h4>
            <p>There may be no personal benefit from your participation in the study but the knowledge received may be of value to humanity. </p>

            <h4>Compensation & Costs</h4>
            <p>You will receive monetary compensation as stated in the description of the study ($10/hr + bonus incentive payment based on your performance in the study).<br>

                There will be no cost to you if you participate in this study.</p> 

            <h4>Confidentiality</h4>
            <p>By participating in the study, you understand and agree that Carnegie Mellon may be required to disclose your consent form, data and other personally identifiable information as required by law, regulation, subpoena or court order.  Otherwise, your confidentiality will be maintained in the following manner:<br>

                Your data and consent form will be kept separate. Your consent form will be stored in a locked location on Carnegie Mellon property and will not be disclosed to third parties. By participating, you understand and agree that the data and information gathered during this study may be used by Carnegie Mellon and published and/or disclosed by Carnegie Mellon to others outside of Carnegie Mellon.  However, your name, address, contact information and other direct personal identifiers in your consent form will not be mentioned in any such publication or dissemination of the research data and/or results by Carnegie Mellon.  <br>

                The researchers will take the following steps to protect participants’ identities during this study: (1) Each participant will be assigned a number as an ID; (2) The researchers will record any data collected during the study by number, not by name; (3) Any original recordings or data files will be stored in a secured location accessed only by authorized researchers.  <br>

                In addition, the sponsor of this study, the Army Research Laboratory, ARL-CRA-Cylab-Pennsylvania State University, will have access to your research information. </p>


            <h4>Rights</h4>
            <p>Your participation is voluntary.  You are free to stop your participation at any point.  Refusal to participate or withdrawal of your consent or discontinued participation in the study will not result in any penalty or loss of benefits or rights to which you might otherwise be entitled.  The Principal Investigator may at his/her discretion remove you from the study for any of a number of reasons.  In such an event, you will not suffer any penalty or loss of benefits or rights which you might otherwise be entitled.</p>

            <h4>Right to Ask Questions & Contact Information</h4>
            <p>If you have any questions about this study, you should feel free to ask them now.  If you have questions later, desire additional information, or wish to withdraw your participation please contact the Principal Investigator by mail, phone or e-mail in accordance with the contact information listed on the first page of this consent.  <br>

                If you have questions pertaining to your rights as a research participant; or to report objections to this study, you should contact the Research Regulatory Compliance Office at Carnegie Mellon University.  Email: irb-review@andrew.cmu.edu . Phone: 412-268-1901 or 412-268-5460.</p>

            <h4>Voluntary Consent</h4>

            <p>By signing below, you agree that the above information has been explained to you and all your current questions have been answered.  You understand that you may ask questions about any aspect of this research study during the course of the study and in the future.  By signing this form, you agree to participate in this research study. </p> 


            </p>

                <form id="consentForm" method="post" action="<?= base_url('ConsentController/consent_validation') ?>">
                    <div class="top">
                        <label for="age">I am age 18 or older.</label>
                    </div>
                    <div class="left">
                        <label for="age_yes"><input type="radio" name="Age" id="age_yes" value="1"> Yes</label>
                        <label for="age_no"><input type="radio" name="Age" id="age_no" value="0"> No</label>
                    </div>
                    <div class="clearfix">&nbsp;</div>

                    <div class="top">
                        <label for="understand">I have read and understood the information above.</label>
                    </div>
                    <div class="left">
                        <label for="understand_yes"><input type="radio" name="understand" id="understand_yes" value="1"> Yes</label>
                        <label for="understand_no"><input type="radio" name="understand" id="understand_no" value="0"> No</label>
                    </div>
                    <div class="clearfix">&nbsp;</div>

                    <div class="top">
                        <label for="participate">I want to participate in this research and continue with the game.</label>
                    </div>
                    <div class="left">
                        <label for="participate_yes"><input type="radio" name="participate" id="participate_yes" value="1"> Yes</label>
                        <label for="participate_no"><input type="radio" name="participate" id="participate_no" value="0"> No</label>
                    </div>

                    <div class="clearfix">&nbsp;</div>

                    <div class="top prominent">
                        <br>
                        <input type="submit" value="Submit">
                    </div>
                </form>

            </article>
        </aside>
    </div>

    <script>
        document.getElementById('consentForm').addEventListener('submit', function (e) {
            //e.preventDefault();

            // Get form data - for simplicity, console logging the data here.
            const formData = new FormData(e.target);
            for (let [name, value] of formData) {
                console.log(name, value);
            }

            // Here you can make an AJAX call to your server, or handle the form data as needed.
        });
    </script>
</body>

</html>
