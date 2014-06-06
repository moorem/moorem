class PagesController < ApplicationController

  skip_before_filter :verify_authenticity_token

  caches_page :team, :about, :services, :portfolio, :career

  def team
  end

  def contact
    @contact = Contact.new
  end

  def about
  end

  def career
  end

  def portfolio
  end

  def create
    @contact = Contact.new(params[:contact])
      if @contact.valid?
        @contact.save
        UserMailer.contact(@contact).deliver
        UserMailer.admin_contact(params[:contact][:uploaded_document],@contact).deliver
        redirect_to contact_pages_path, flash: {:success => " Your request has been sent"}
      else
        render 'contact'
      end
  end

  def send_newsletter
    @newsletter = Newsletter.new(:email => params[:email])
    if @newsletter.valid?
      @newsletter.save
      UserMailer.newsletter_user(@newsletter).deliver
      UserMailer.newsletter_admin(@newsletter).deliver
      flash[:notice] = 'Your request has been sent'
      redirect_to root_url
    else
      redirect_to root_url, error: 'Please enter valid Email.'
    end
  end
end
