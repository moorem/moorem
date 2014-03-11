class PagesController < ApplicationController


  def about_us
  end

  def services
  end

  def testimonials
  end

  def sitemap
  end

  def contact_us
    @contact = Contact.new
    @contact.textcaptcha
  end

  def create
    @contact = Contact.new(params[:contact])
    if @contact.valid?
      @contact.save
      redirect_to root_url, notice: 'Message sent! Thank you for contacting us.'
      UserMailer.contact(@contact).deliver
      UserMailer.admin_contact(params[:contact][:uploaded_document],@contact).deliver
    else
      render 'contact_us'
    end
  end


end
