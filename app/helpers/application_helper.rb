module ApplicationHelper
  def nav_active(controller_name = nil, action_name = nil)
    if (!controller_name || controller_name == controller.controller_name) &&
       (!action_name || action_name == controller.action_name)
       'active'
     else
       ''
     end
  end
end
