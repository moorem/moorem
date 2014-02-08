class UserMailer < ActionMailer::Base
  default from: 'contact@moorem.com'

  def contact(con)
    @con = con
    mail(to: @con.email, subject: 'Thanks for contacting us, will get back shortly')
  end
end
