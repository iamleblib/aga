@extends('layouts.front')
@section('title', 'Terms and Condition')
@section('content')

    <section class="page-title" style="background-image:url({{ asset('front/images/background/terms.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1>Terms and <br><span>Conditions</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Terms</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-page-section">
        <div class="auto-container">
            <div class="inner-container">
                <h2>Terms & <br> <span>Conditions</span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                    </svg></h2>
                <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
                    <div class="container">
                        <div class="row">
                            <div class="p-4"></div>
                            <div class="col-12">
                                <p>{{ env('APP_NAME') }}is a platform managed by {{ env('APP_NAME') }} (referred to as "AGA" henceforth). By accessing and using the http://altriagroupassets.com website, you agree to the following terms and conditions (the "terms") as they may be modified, changed, supplemented or updated from time to time, as well as all applicable laws and regulations. Please read the following terms carefully. If you do not agree to any of the terms, please do not use this Website or any information, links or content contained on this Website. Your access to and use of this Website constitutes your acceptance of an agreement to abide by each of the terms set forth below including our Privacy Policy which is hereby incorporated in the terms by reference. If you are using our Website on behalf of your organization, that organization accepts the terms.
                                    <br>
                                    The terms may be modified, changed, supplemented or updated by AGA ("we", "us" or "our" as applicable) in its sole discretion at any time without advance notice. We suggest that you visit this page regularly to keep up to date with any changes. Your continued use of this Website will confirm your acceptance of the terms as modified, changed, supplemented or updated by us. If you do not agree to such revised terms you must stop using this Website and any information, links or content contained on this Website.</p>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">USE OF WEBSITE <span class="fa fa-angle-down"></span></a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                The purpose of our Website is to provide you with a blockchain-based platform that offers ground-breaking trading asset. You must not breach any of the following terms or our Acceptable Use Policy set out below.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <a class=""  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">THIRD PARTY CONTENT <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                We may display third-party content, advertisements, links, promotions, logos, and other materials on our Website (collectively, the "Third-Party Content") for your convenience only. We do not approve of, control, endorse or sponsor any third parties or Third-Party Content, and we make no representations or warranties of any kind regarding such Third-Party Content, including, without limitation, the accuracy, validity, legality, copyright compliance, or decency of such content. Your use of or interactions with any Third-Party Content, and any third party that provides Third-Party Content are solely between you and such third parties and we are not responsible or liable in any manner for such use or interactions. We are not responsible for any of the content on third party sites linked to our Website nor can it be assumed that we have reviewed or approved of such sites or their content, nor do we warrant that the links to these sites work or are up-to-date.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <a class=""  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">USER CONTENT <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                If you post, upload, input, provide or submit your personal data to us, including without limitation, your name, email address, IP address, cryptocurrency address, text, code or other information and materials, sign up to our mailing list or create an account on our Website (collectively, your "User Content"), you must ensure that the User Content provided by you at that or at any other time is accurate, up to date and complete and that any User Content you post, upload, input, provide or submit to us or via our Website do not breach or infringe the intellectual property rights of any third party. We do not own, control or endorse any User Content that is transmitted, stored or processed via our Website or sent to us, and we are not responsible or liable for any User Content. You are solely responsible and liable for all of your User Content and for your use of any interactive features, links or information or content on our Website, and you represent and warrant that
                                                <br>
                                                You own all intellectual property rights (or have obtained all necessary permissions) to provide your User Content and to grant the licenses in these terms;
                                                Your User Content will not violate any agreements or confidentiality obligations; and
                                                Your User Content will not break, infringe or misappropriate any intellectual property right or another proprietary right, including the right of publicity or privacy, of any person or entity.
                                                You are entirely responsible for maintaining the confidentiality of your User Content and any of your non-public information. Furthermore, you are solely responsible for any and all activities that occur under your account (if any). You agree to notify us immediately of any unauthorized use of your User Content, account or any other breach of security. We will not be liable for any loss or damages that you may incur as a result of someone else using your User Content or account, either with or without your knowledge. However, you could be held liable for losses incurred by the {{ env('APP_NAME') }} Parties (as defined below) or another party due to someone else using your User Content or account. You may not use anyone else's User Content or account at any time without the permission of such person or entity.
                                                <br>
                                                By posting, uploading, inputting, providing or submitting your User Content to us, you grant {{ env('APP_NAME') }}, its affiliates and any necessary sub-licensees a non-exclusive, worldwide, perpetual, right and permission to use, reproduce, copy, edit, modify, translate, reformat, create derivative works from, distribute, transmit, publicly perform and publicly display your User Content and sub-license such rights to others.
                                                <br>
                                                You must immediately update and inform us of any changes to your User Content by updating your personal data by contacting us at support@altriagroupassets.com so that we can communicate with you effectively and provide accurate and up to date information to you.
                                                <br>
                                                Although we have no obligation to screen, edit or monitor User Content, we reserve the right and have absolute discretion, to remove, screen or edit User Content. Furthermore, if we have reason to believe that there is likely to be a breach of security, breach or misuse of our Website or if you breach any of your obligations under these terms or the Privacy Policy, we may suspend your use of this Website at any time and for any reason.
                                                <br>
                                                Any User Content submitted by you on this Website may be accessed by us globally.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <a class=""  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">FEEDBACK <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body">
                                                If you decide to submit questions, comments, suggestions, ideas, original or creative materials or other information to us (collectively, "Feedback"), you do so on your own accord and not based on any request or solicitation from us. Feedback does not include User Content. We reserve the right to use Feedback for any purpose at no charge and without compensation to you. Do not send us Feedback if you expect to be paid or want to continue to own or claim rights to your Feedback. The purpose of these terms is to avoid potential misunderstandings or disputes if our products, services, business ideas or business strategies might seem similar to ideas submitted to us as Feedback. If you decide to send us Feedback, you acknowledge and understand that the {{ env('APP_NAME') }} Parties make no assurances that your Feedback will be treated as confidential or proprietary.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingFive">
                                            <a class=""  data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">AGGREGATE INFORMATION <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                            <div class="card-body">
                                                We may gather information and statistics collectively about all visitors to this Website which may include the information supplied by you. This information helps us to design and arrange our Web pages in a user-friendly manner and to continually improve our Website to better meet the needs of our Website users. We may share this kind of aggregate data with selected third parties to assist with these purposes. Personal data is processed by us in line with our Privacy Policy.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="heading6">
                                            <a class=""  data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">INTELLECTUAL PROPERTY <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                                            <div class="card-body">
                                                {{ env('APP_NAME') }} and its licensors reserve all right, title and interest in and to this Website and its products and services, including all copyrights, patents, trade secrets, trademarks, other intellectual property rights, trade names, logos, slogans, custom graphics, button icons, scripts, videos, text, images, software, code, files, content, information and other material available on our Website and nothing on this Website may be copied, imitated or used, in whole or in part, without our or the applicable licensor's prior written permission. We reserve all rights not expressly granted.
                                                <br>
                                                Any unauthorized reproduction is prohibited.
                                                <br>
                                                You may only access, use and print the information and material on this Website for non-commercial or personal use provided that you are authorized to access such information or material and keep intact all copyright and proprietary notices.
                                                <br>
                                                You must not otherwise reproduce, adapt, store, transmit, distribute, print, display, commercialize, publish or create derivative works from any part of the content, format or design of this Website.
                                                <br>
                                                If you seek to reproduce or otherwise use the content on this Website in any way it is your responsibility to obtain approval from us for such use. Nothing in these terms will be construed as conferring any right or license to any patent, trademark, copyright or other proprietary rights of {{ env('APP_NAME') }} or any third party, whether by estoppel, implication or otherwise.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="heading7">
                                            <a class=""  data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">ACCEPTABLE USE POLICY <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h6>
                                                    YOU MUST ONLY USE THE CONTENT OR SERVICES PROVIDED THROUGH THIS WEBSITE FOR THEIR STATED PURPOSE. YOU MUST NOT USE THIS WEBSITE TO
                                                </h6>
                                                <br>
                                                publish, post, send, upload, submit, display or disseminate any information or material and/or otherwise make available or engage in any conduct that is unlawful, discriminatory, harassing, libelous, defamatory, abusive, threatening, harmful, offensive, obscene, tortious or otherwise objectionable;
                                                display, upload or transmit material that encourages conduct that may constitute a criminal offense, result in civil liability or otherwise violate or breach any applicable laws, regulations or code of practice;
                                                interfere or violate the legal rights (such as rights of privacy and publicity) of others or violate others use or enjoyment of this Website;
                                                violate any applicable laws or regulations; <br>
                                                use this Website or links on this Website in any manner that could interfere with, disrupt, negatively affect or inhibit other users from using this Website or links on this Website or that could damage, disable, overburden or impair the functioning of this Website or our servers or any networks connected to any of our servers in any manner;
                                                create a false identity for the purpose of misleading others or fraudulently or otherwise misrepresent yourself to be another person or a representative of another entity including, but not limited to, an authorized user of this Website or a VGM representative, or fraudulently or otherwise misrepresent that you have an affiliation with a person, entity or group;
                                                mislead or deceive us, our representatives and any third parties who may rely on the information provided by you, by providing inaccurate or false information, which includes omissions of information;
                                                disguise the origin of any material transmitted through the services provided by this Website (whether by forging message/packet headers or otherwise manipulating normal identification information);
                                                violate, infringe or misappropriate any intellectual or industrial property right of any person (such as copyright, trademarks, patents, or trade secrets, or other proprietary rights of any party) or commit a tort;
                                                upload files that contain viruses, Trojan horses, worms, time bombs, cancel bots, corrupted files, or any other similar software or programs that may damage the operation of another computer or property;
                                                send, upload, display or disseminate or otherwise make available material containing or associated with spam, junk mail, advertising for pyramid schemes, chain letters, virus warnings (without first confirming the authenticity of the warning), or any other form of unauthorized advertising or promotional material;
                                                access any content, area or functionality of this Website that you are prohibited or restricted from accessing or attempt to bypass or circumvent measures employed to prevent or limit your access to any content, area or functionality of this Website;
                                                obtain unauthorized access to or interfere with the performance of the servers which host this Website or provide the services on this Website or any servers on any associated networks or otherwise fail to comply with any policies or procedures relating to the use of those servers;
                                                attempt to gain unauthorized access to any services or products, other accounts, computer systems, or networks connected to any of our servers through hacking, password mining, or any other means;
                                                obtain or attempt to obtain any materials or information through any means not intentionally made available through this Website or its services;
                                                harvest or otherwise collect, whether aggregated or otherwise, data about others including e-mail addresses and/or distribute or sell such data in any manner;
                                                use any part of this Website other than for its intended purpose; or
                                                use this Website to engage in or promote any activity that violates these terms.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="heading8">
                                            <a class=""  data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">INDEMNIFICATION <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h6>TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, YOU WILL INDEMNIFY, DEFEND AND HOLD HARMLESS US AND OUR RESPECTIVE PAST, PRESENT AND FUTURE EMPLOYEES, OFFICERS, DIRECTORS, CONTRACTORS, CONSULTANTS, EQUITY HOLDERS, SUPPLIERS, VENDORS, SERVICE PROVIDERS, PARENT COMPANIES, SUBSIDIARIES, AFFILIATES, AGENTS, REPRESENTATIVES, PREDECESSORS, SUCCESSORS AND ASSIGNS (COLLECTIVELY, THE "VGM PARTIES") FROM AND AGAINST ALL CLAIMS, DAMAGES, LIABILITIES, LOSSES, COSTS AND EXPENSES (INCLUDING ATTORNEYS' FEES) THAT ARISE FROM OR RELATE TO</h6>
                                                <br>
                                                - Your access to or use of our Website, products or services;
                                                <br>
                                                - Your User Content;
                                                <br>
                                                - Any Feedback you provide; or
                                                <br>
                                                - Your violation of these Terms.
                                                <br>
                                                - We reserve the right to exercise some control over the defence, at your expense, of any claim subject to indemnification according to these terms. This indemnity is in addition to, and not in lieu of, any other indemnities outlined in a written agreement between you and us.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="heading9">
                                            <a class=""  data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">DISCLAIMER <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                                            <div class="card-body">
                                                This website and all information, products, and services provided through this website are provided "as is" and on an "as available" basis without any representations, warranties, promises or guarantees whatsoever of any kind including, without limitation, any representations, warranties, promises or guarantees regarding the accuracy, currency, completeness, adequacy, availability, suitability or operation of this website, any products or services we may provide through it or the information or material it contains.
                                                <br>
                                                <b>Each of the AGA parties disclaim all representations and warranties, whether express, implied or statutory, with regard to the foregoing, including, without limitation: (a) any warranty with respect to the content, information, data, services, availability, uninterrupted access, or services or products provided through or in connection with this website;</b>
                                                <br>
                                                - Any warranties that this website or the server that makes it available are free of viruses, worms, trojan horses or other harmful components;
                                                <br>
                                                - Any warranties that this website, its content and any services or products provided through it are error-free or that defects in this website, its content or such services or products will be corrected;
                                                <br>
                                                - Any warranties of title or implied warranties of merchantability or fitness for a particular purpose;
                                                <br>
                                                - Any warranties that this website will be compatible with your computer or other electronic equipment; and
                                                <br>
                                                - Any warranties of non-infringement. the materials and related graphics published on this website could include technical inaccuracies or typographical errors. changes are periodically added to the information contained on this website. the {{ env('APP_NAME') }} parties may make improvements and/or changes to the website, its products, services and/or the materials described on this website at any time.
                                                <br>
                                                <br>
                                                <h5>ALSO, TO THE MAXIMUM EXTENT PERMITTED BY LAW, NONE OF THE {{ env('APP_NAME') }} PARTIES SHALL BE RESPONSIBLE OR LIABLE FOR:</h5>
                                                <br>
                                                - Any loss, liability, cost, expense or damage suffered or incurred arising out of or in connection with any access to or use of this Website or any of its content;
                                                <br>
                                                - Any reliance on, or decision made on the basis of, information or material shown on or omitted from this Website;
                                                <br>
                                                - Any representation or otherwise in respect of the existence or availability of any job, vacancy, assignment or other engagement or appointment advertised on this Website (if any) and any representation or otherwise that we have or will ask for a candidate's information, will or have asked to interview or hire a candidate, or that any candidates will meet our needs;
                                                <br>
                                                - Any matter affecting this Website or any of its content caused by circumstances beyond our reasonable control;
                                                <br>
                                                - The performance of this Website and any fault, delays, interruptions or lack of availability of this Website and any of the services or products provided through this Website, which may occur due to increased usage of this Website, intermittent failures of this Website or the need for repairs, maintenance or the introduction of new facilities, products or services;
                                                <br>
                                                - Any information or material on any website operated by a third party which may be accessed from this Website.
                                                <br>
                                                <br>
                                                <h5>IN NO EVENT WILL THE VGM PARTIES BE RESPONSIBLE OR LIABLE FOR ANY CLAIMS, DAMAGES, LIABILITIES, LOSSES, COSTS OR EXPENSES OF ANY KIND, WHETHER DIRECT OR INDIRECT, CONSEQUENTIAL, COMPENSATORY, INCIDENTAL, ACTUAL, EXEMPLARY, PUNITIVE OR SPECIAL (INCLUDING DAMAGES FOR LOSS OF BUSINESS, REVENUES, PROFITS, DATA, USE, GOODWILL OR OTHER INTANGIBLE LOSSES) REGARDLESS OF WHETHER THE AGA PARTIES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, LIABILITIES, LOSSES, COSTS OR EXPENSES, ARISING OUT OF OR IN CONNECTION WITH:</h5>
                                                <br>
                                                The use or performance of this website;
                                                <br>
                                                - Any provision of or failure to provide this website or its services (including without limitation any links on our website);
                                                <br>
                                                - Any information available from this website;
                                                <br>
                                                - Any conduct or content of any third party;
                                                <br>
                                                - Unauthorized access, use or alteration of the transmission of data or content to or from us; or
                                                the failure to receive in any way the transmission of any data, content, funds or property from you in no circumstances will the aggregate liability of the AGA parties arising under these terms exceed $5.00.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="heading10">
                                            <a class=""  data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">GENERAL <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                                            <div class="card-body">
                                                - The terms are governed by the laws of Cyprus. All claims arising out of or relating to these terms will be litigated exclusively in the courts within Cyprus and we and you consent to personal jurisdiction in those courts.
                                                <br>
                                                - These terms control the relationship between us and you. They do not create any third-party beneficiary rights.
                                                <br>
                                                - If you do not comply with these terms, and we don't take action right away, this doesn't mean that we are giving up any rights that we may have (such as taking action in the future).
                                                <br>
                                                - If it turns out that a particular term is not enforceable, the term will be modified such that it is enforceable and this will not affect any other terms contained herein.
                                                <br>
                                                - If you have any questions regarding these terms, please contact us at support@altriagroupassets.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
