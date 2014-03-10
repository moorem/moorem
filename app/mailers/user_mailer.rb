class UserMailer < ActionMailer::Base
  default from: 'contact@moorem.com'


  def contact(con)
    @con = con
    mail(to: @con.email, subject: 'Thanks for contacting us, will get back shortly')
  end

  def admin_contact(con)
=begin
    attachments[con.uploaded_document.original_filename] = {
       content:  con.uploaded_document.read,
       mime_type: con.uploaded_document.content_type
    }
=end
    @con = con
    mail(to: "siva@moorem.com", subject: "[Moorem] - #{con.subject} from #{@con.name}")
  end


end
