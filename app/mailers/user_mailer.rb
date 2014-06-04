class UserMailer < ActionMailer::Base
  default from: 'contact@moorem.com'

  def contact(con)
    @con = con
    mail(to: @con.email, subject: 'Thanks for contacting us, will get back shortly')
  end

  def admin_contact(uploaded_file,con)
    @contact = con
    attachments[uploaded_file.original_filename] = {
        content:  uploaded_file.read,
        mime_type: uploaded_file.content_type
    }unless uploaded_file.nil?

    mail(from: @contact.email, to: "contact@moorem.com", subject: "[Moorem] - #{@contact.subject} from #{@contact.name}")
  end

  def newsletter_user(newsletter)
    @newsletter = newsletter
    mail(to: @newsletter.email, subject: 'Thanks for subscribing to our NewsLetter')
  end

  def newsletter_admin(newsletter)
    @newsletter = newsletter
    mail(from: @newsletter.email,to: "contact@moorem.com", subject: "[Moorem] - #{@newsletter.email} has subscribed for NewsLetter")
  end
end