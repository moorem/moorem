class UserMailer < ActionMailer::Base
  default from: 'contact@moorem.com'


  def contact(con)
    @con = con
    mail(to: @con.email, subject: 'Thanks for contacting us, will get back shortly')
  end

  def admin_contact(uploaded_file,con)

      attachments[uploaded_file.original_filename] = {
       content:  uploaded_file.read,
       mime_type: uploaded_file.content_type
      }unless uploaded_file.nil?

    @contact = con
    mail(to: "contact@moorem.com", subject: "[Moorem] - #{@contact.subject} from #{@contact.name}")
  end


end
