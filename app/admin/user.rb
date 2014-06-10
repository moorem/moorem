ActiveAdmin.register User do

  permit_params :email, :role_ids
  menu :priority => 4

  index do
    selectable_column
    column :email

    actions
  end

  form do |f|
    f.inputs "UserRole Details" do
      f.input :email
      f.input :role_ids, as: :select, :collection => Role.all.map{ |role| [role.name, role.id] }
    end
    f.actions
  end
  
  show do
    attributes_table :email, :created_at, :updated_at
  end

  controller do
    def permitted_params
      params.permit user: [:email, :utf8, :_method, :authenticity_token, :role_ids, :commit, :id]
    end
  end

end
