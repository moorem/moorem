class UserMailer < ActionMailer::Base
  subject_list = ["PLEASE SELECT","General Inquiry","Project Quotation","Post Your Resume"]
  default from: 'contact@moorem.com'

  def contact(thefile,con)
    attachments['upload.txt'] = thefile.read
    @con = con
    mail(to: @con.email, subject: 'Thanks for contacting us, will get back shortly')
    #mail(to: "contact@moorem.com", subject: "Moorem #{subject_list[@con.subject]} from #{@con.name} #{@con.email}")
  end
end
