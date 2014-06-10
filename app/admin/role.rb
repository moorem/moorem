ActiveAdmin.register Role do

  menu :priority => 3

  index do
    selectable_column
    column :name

    actions
  end

  form do |f|
    f.inputs "Role Details" do
      f.input :name

    end
    f.actions
  end
  
  show do
    attributes_table :name, :created_at, :updated_at
  end

end
