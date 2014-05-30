class PagesController < ApplicationController

  caches_page :team, :about, :services, :portfolio

  def team
  end

  def contact
    @contact = Contact.new
  end

  def about
  end

  def services
  end

  def portfolio
  end

  def create
    @contact = Contact.new(params[:contact])
    if @contact.valid?
      @contact.save
      redirect_to root_url, notice: 'Message sent! Thank you for contacting us.'
      UserMailer.contact(@contact).deliver
      UserMailer.admin_contact(params[:contact][:uploaded_document],@contact).deliver
    else
      render 'contact'
    end
  end

  def send_newsletter
    @newsletter = Newsletter.create(:email => params[:email])
    if @newsletter.valid?
      @newsletter.save
      redirect_to root_url, notice: 'Thanks for registering to our Newsletter.Plese check your Email.'
      UserMailer.newsletter_user(@newsletter).deliver
      UserMailer.newsletter_admin(@newsletter).deliver
    else
      redirect_to root_url, error: 'Please enter valid Email.'
    end
  end
end
