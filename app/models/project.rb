class Project < ActiveRecord::Base
  attr_accessible :content, :lead, :name
  has_many :project_link_buttons
end
