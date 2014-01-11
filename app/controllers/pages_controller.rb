class PagesController < ApplicationController
  def about_us
    @tweets = Twitter.user_timeline[0..4]
  end

  def services
    @tweets = Twitter.user_timeline[0..4]
  end

  def testimonials
    @tweets = Twitter.user_timeline[0..4]
  end

  def sitemap
    @tweets = Twitter.user_timeline[0..4]
  end

  def contact_us
    @tweets = Twitter.user_timeline[0..4]
    @contact = Contact.new
  end

  def create
    @contact = Contact.new(params[:contact])
    if @contact.valid?
      @contact.save
      redirect_to root_url, notice: 'Message sent! Thank you for contacting us.'
      UserMailer.contact(@contact).deliver
    else
      render 'contact'
    end
  end

end
