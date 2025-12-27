import { Upload, Search, AlertTriangle, Users } from "lucide-react";

const ActionButtons = () => {
  const actions = [
    {
      label: "Upload Khoya",
      icon: AlertTriangle,
      url: "https://khoji.in/NonKyc/add_mahakumbh_member_special?type=khoya",
      description: "Report a missing person",
      variant: "destructive" as const,
    },
    {
      label: "Upload Paya",
      icon: Users,
      url: "https://khoji.in/NonKyc/add_mahakumbh_member_special?type=paya",
      description: "Report a found person",
      variant: "success" as const,
    },
    {
      label: "Upload General",
      icon: Upload,
      url: "https://khoji.in/NonKyc/add_mahakumbh_member_special?type=general",
      description: "General upload",
      variant: "default" as const,
    },
    {
      label: "Search By Face Photo",
      icon: Search,
      url: "https://khoji.in/check-person-face-funnel",
      description: "Find using face recognition",
      variant: "primary" as const,
    },
  ];

  const getButtonStyles = (variant: string) => {
    switch (variant) {
      case "destructive":
        return "bg-destructive hover:bg-destructive/90 text-destructive-foreground";
      case "success":
        return "bg-emerald-600 hover:bg-emerald-700 text-white";
      case "primary":
        return "bg-primary hover:bg-primary/90 text-primary-foreground";
      default:
        return "bg-secondary hover:bg-secondary/80 text-secondary-foreground";
    }
  };

  return (
    <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-2xl mx-auto">
      {actions.map((action) => (
        <a
          key={action.label}
          href={action.url}
          target="_blank"
          rel="noopener noreferrer"
          className={`
            flex flex-col items-center gap-3 p-6 rounded-xl 
            transition-all duration-300 transform hover:scale-105 hover:shadow-lg
            ${getButtonStyles(action.variant)}
            animate-scale-in
          `}
        >
          <action.icon className="h-8 w-8" />
          <span className="font-semibold text-lg">{action.label}</span>
          <span className="text-sm opacity-80 text-center">{action.description}</span>
        </a>
      ))}
    </div>
  );
};

export default ActionButtons;
