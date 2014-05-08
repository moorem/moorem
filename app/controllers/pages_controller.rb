class PagesController < ApplicationController
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
    else
      render 'contact'
    end
  end
end
