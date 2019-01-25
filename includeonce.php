<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");
$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');
$formproc->EnableCaptcha($captcha);
//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('trendtudung.buymuslimsproduct@blogger.com'); //<<---Put your email address here
//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('E6bZFICMgOhOnxI');
$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("https://buymuslims.blogspot.com/");
   }
}
?>
