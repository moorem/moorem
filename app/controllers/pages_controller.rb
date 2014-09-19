class PagesController < ApplicationController
  caches_page :team, :about, :blog, :portfolio, :career

  def team
  end

  def contact
    @contact = Contact.new
    @contact.textcaptcha
  end

  def create
    @contact = Contact.new(params[:contact])
    if @contact.valid?
      @contact.save
      UserMailer.contact(@contact).deliver
      UserMailer.admin_contact(params[:uploaded_document], @contact).deliver
      redirect_to root_path, flash: {:success => 'Your request has been sent'}
    else
      render 'contact'
    end
  end

  def about
  end

  def career
  end

  def portfolio
  end

  def blog
  end

  def sitemap
  end

  def show
    render status_code.to_s, :status => status_code
  end

  protected

  def status_code
    params[:code] || 404
  end
end
