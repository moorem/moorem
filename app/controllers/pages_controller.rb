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
    @contact = Contact.new(subject: 1)
  end

  def create
    @contact = Contact.new(params[:contact])
    if @contact.valid?
      @contact.save!
      redirect_to root_url, notice: 'Message sent! Thank you for contacting us.'
      UserMailer.contact(params[:contact][:uploaded_document],@contact).deliver
    else
      render 'contact'
    end
  end

end
