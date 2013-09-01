class Project < ActiveRecord::Base
  attr_accessible :lead, :name
  has_many :project_link_buttons
  has_many :project_content_lists
end
